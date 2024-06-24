<?php

namespace App\Http\Controllers\Backends;

use Exception;
use App\Models\Lesson;
use App\Models\Translation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\helpers\ImageManager;
use App\Models\LessonCategory;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = LessonCategory::all();
        $lessons = Lesson::when($request->category_id, function ($query) use ($request) {
            $query->where('category_id', $request->category_id);
        })->latest('id')->paginate(10);

        if ($request->ajax()) {
            $view = view('backends.lesson._table', compact('lessons', 'categories'))->render();
            return response()->json([
                'view' => $view
            ]);
        }

        return view('backends.lesson.index', compact('lessons', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = LessonCategory::pluck('title', 'id');
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.lesson.create', compact('categories', 'language', 'default_lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title',
                    'Title field is required!'
                );
            });
        }

        if (is_null($request->description[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'description',
                    'Description field is required!'
                );
            });
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            DB::beginTransaction();

            $lesson = new Lesson();
            $lesson->title = $request->title[array_search('en', $request->lang)];
            $lesson->slug = Str::slug($lesson->title . '-');
            $lesson->description = $request->description[array_search('en', $request->lang)];
            $lesson->category_id = $request->category;
            $lesson->type = $request->type;


            if ($request->hasFile('thumbnail')) {
                $lesson->thumbnail = ImageManager::upload('uploads/lessons/', $request->thumbnail);
            }
            if ($request->type === 'video') {
                if ($request->hasFile('video')) {
                    $lesson->video = ImageManager::upload('uploads/lessons/', $request->video);
                }
            } elseif ($request->type === 'url') {
                $lesson->url = $request->url;
            }
            $lesson->save();

            $data = [];
            foreach ($request->lang as $index => $key) {
                if ($request->title[$index] && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Lesson',
                        'translationable_id' => $lesson->id,
                        'locale' => $key,
                        'key' => 'title',
                        'value' => $request->title[$index],
                    ));
                }
                if ($request->description[$index] && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Lesson',
                        'translationable_id' => $lesson->id,
                        'locale' => $key,
                        'key' => 'description',
                        'value' => $request->description[$index],
                    ));
                }
            }
            Translation::insert($data);

            DB::commit();
            $output = [
                'success' => 1,
                'msg' => __('Created successfully')
            ];
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong')
            ];
        }

        return redirect()->route('admin.lesson.index')->with($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::withoutGlobalScopes()->with('translations')->findOrFail($id);
        $categories = LessonCategory::pluck('title', 'id');

        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.lesson.edit', compact('lesson', 'categories', 'language', 'default_lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'nullable',
            'description' => 'required',
            'thumbnail' => 'nullable',
            // 'video' => 'file|mimes:mp4,mov,avi,flv|max:20480'
        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title',
                    'Title field is required!'
                );
            });
        }

        if (is_null($request->description[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'description',
                    'Description field is required!'
                );
            });
        }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            DB::beginTransaction();

            $lesson = Lesson::findOrFail($id);
            $lesson->title = $request->title[array_search('en', $request->lang)];
            $lesson->slug = Str::slug($lesson->title . '-');
            $lesson->description = $request->description[array_search('en', $request->lang)];
            $lesson->category_id = $request->category;

            if ($request->type === 'video') {
                if ($request->hasFile('video')) {
                    $lesson->video = ImageManager::update('uploads/lessons/', $lesson->video, $request->video);
                }

                // Clear URL if switching to video
                $lesson->url = null;
            } elseif ($request->type === 'url') {
                $lesson->url = $request->url;

                // Delete old video if exists
                if ($lesson->video) {
                    $oldVideoPath = public_path('uploads/lessons/' . $lesson->video);
                    if (file_exists($oldVideoPath)) {
                        unlink($oldVideoPath); // Delete the old video file
                    }
                    $lesson->video = null;
                }
            }
            $lesson->type = $request->type;

            if ($request->hasFile('thumbnail')) {
                $lesson->thumbnail = ImageManager::update('uploads/lessons/', $lesson->thumbnail, $request->thumbnail);
            }
            $lesson->save();

            $data = [];
            foreach ($request->lang as $index => $key) {
                if (isset($request->title[$index]) && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Lesson',
                        'translationable_id' => $lesson->id,
                        'locale' => $key,
                        'key' => 'title',
                        'value' => $request->title[$index],
                    ));
                }
            }
            foreach ($request->lang as $index => $key) {
                if (isset($request->description[$index]) && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Lesson',
                        'translationable_id' => $lesson->id,
                        'locale' => $key,
                        'key' => 'description',
                        'value' => $request->description[$index],
                    ));
                }
            }
            Translation::insert($data);

            DB::commit();
            $output = [
                'success' => 1,
                'msg' => __('Created successfully')
            ];
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong')
            ];
        }

        return redirect()->route('admin.lesson.index')->with($output);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $lesson = Lesson::findOrFail($id);
            $translation = Translation::where('translationable_type', 'App\Models\Lesson')
                ->where('translationable_id', $lesson->id);
            $translation->delete();
            $lesson->delete();

            $lessons = Lesson::latest('id')->paginate(10);
            $view = view('backends.lesson._table', compact('lessons'))->render();

            DB::commit();
            $output = [
                'status' => 1,
                'view' => $view,
                'msg' => __('Deleted successfully')
            ];
        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'status' => 0,
                'msg' => __('Something went wrong')
            ];
        }

        return response()->json($output);
    }

    public function updateStatus(Request $request)
    {
        try {
            DB::beginTransaction();

            $lesson = Lesson::findOrFail($request->id);
            $lesson->status = $lesson->status == 1 ? 0 : 1;
            $lesson->save();

            $output = ['status' => 1, 'msg' => __('Status updated')];

            DB::commit();
        } catch (Exception $e) {

            $output = ['status' => 0, 'msg' => __('Something went wrong')];
            DB::rollBack();
        }

        return response()->json($output);
    }
}
