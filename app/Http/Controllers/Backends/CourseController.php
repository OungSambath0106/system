<?php

namespace App\Http\Controllers\Backends;

use App\helpers\ImageManager;
use Exception;
use App\Models\Course;
use App\Models\Category;
use App\Models\Translation;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest('id')->paginate(10);
        return view('backends.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];
        return view('backends.course.create', compact('language', 'default_lang'));
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
            'description' => 'required',
            'image' => 'nullable',

        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title',
                    'title field is required!'
                );
            });
        }
        if (is_null($request->description[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'description',
                    'description field is required!'
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

            $course = new Course();
            $course->title = $request->title[array_search('en', $request->lang)];
            $course->description = $request->description[array_search('en', $request->lang)];

            if ($request->hasFile('image')) {
                $course->image = ImageManager::upload('uploads/course/', $request->image);
            }

            $course->save();


            $data = [];
            foreach ($request->lang as $index => $key) {
                if ($request->title[$index] && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Course',
                        'translationable_id' => $course->id,
                        'locale' => $key,
                        'key' => 'title',
                        'value' => $request->title[$index],
                    ));
                }
                if ($request->description[$index] && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Course',
                        'translationable_id' => $course->id,
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
        return redirect()->route('admin.course.index')->with($output);
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
        $course = Course::withoutGlobalScopes()->with('translations')->findOrFail($id);
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];
        return view('backends.course.edit', compact('course', 'language', 'default_lang'));
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
            'description' => 'required',
            'image' => 'nullable',
        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title',
                    'title field is required!'
                );
            });
        }
        if (is_null($request->description[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'description',
                    'description field is required!'
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

            $course =  Course::findOrFail($id);
            $course->title = $request->title[array_search('en', $request->lang)];
            $course->description = $request->description[array_search('en', $request->lang)];

            if ($request->hasFile('image')) {
                $course->image = ImageManager::update('uploads/course/', $course->image, $request->image);
            }

            $course->save();


            $data = [];
            foreach ($request->lang as $index => $key) {
                if (isset($request->title[$index]) && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Course',
                        'translationable_id' => $course->id,
                        'locale' => $key,
                        'key' => 'title',
                        'value' => $request->title[$index],
                    ));
                }
            }
            foreach ($request->lang as $index => $key) {
                if (isset($request->description[$index]) && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\Course',
                        'translationable_id' => $course->id,
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
                'msg' => __('Update successfully')
            ];
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong')
            ];
        }
        return redirect()->route('admin.course.index')->with($output);
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
            $course = Course::findOrFail($id);
            $translation = Translation::where('translationable_type', 'App\Models\Course')
                ->where('translationable_id', $course->id);
            $translation->delete();
            $course->delete();

            $courses = Course::latest('id')->paginate(10);
            $view = view('backends.course._table', compact('courses'))->render();

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
}
