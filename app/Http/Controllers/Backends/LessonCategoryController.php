<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use App\Models\Course;
use App\Models\LessonCategory;
use App\Models\Translation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LessonCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = LessonCategory::orderBy('order', 'asc')->paginate(10);
        return view('backends.lesson-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('title', 'id');
        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.lesson-category._create', compact('courses', 'language', 'default_lang'));
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
            'course' => 'nullable',
        ]);
        
        $validatedData = $request->validate([
            'order' => 'nullable|integer|min:1|max:100',
        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title', 'Title field is required!'
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

            $category = new LessonCategory();
            $category->title = $request->title[array_search('en', $request->lang)];
            $category->course_id = $request->course;
            $order = $validatedData['order'] ?? 1;
            $existingItem = LessonCategory::where('order', $order)->first();

            if ($existingItem) {
                LessonCategory::where('order', '>=', $order)->increment('order');
            }

            $category->order = $order;
            $category->save();

            $data = [];
            foreach ($request->lang as $index => $key) {
                if ($request->title[$index] && $key != 'en') {
                    array_push($data, array(
                        'translationable_type' => 'App\Models\LessonCategory',
                        'translationable_id' => $category->id,
                        'locale' => $key,
                        'key' => 'title',
                        'value' => $request->title[$index],
                    ));
                }
            }
            Translation::insert($data);

            DB::commit();

            $output = [
                'success' => 1,
                'msg' => __('Create successfully'),
            ];

        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong'),
            ];
        }

        return redirect()->back()->with($output);
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
        $category = LessonCategory::withoutGlobalScopes()->with('translations')->findOrFail($id);
        $courses = Course::pluck('title', 'id');

        $language = BusinessSetting::where('type', 'language')->first();
        $language = $language->value ?? null;
        $default_lang = 'en';
        $default_lang = json_decode($language, true)[0]['code'];

        return view('backends.lesson-category._edit', compact('category', 'courses', 'language', 'default_lang'));
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
            'course' => 'nullable',
        ]);

        $validatedData = $request->validate([
            'order' => 'nullable|integer|min:1|max:100',
        ]);

        if (is_null($request->title[array_search('en', $request->lang)])) {
            $validator->after(function ($validator) {
                $validator->errors()->add(
                    'title', 'Title field is required!'
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

            $category = LessonCategory::findOrFail($id);
            $category->title = $request->title[array_search('en', $request->lang)];
            $category->course_id = $request->course;
            $order = $validatedData['order'] ?? 1;
            $existingItem = LessonCategory::where('order', $order)->first();

            if ($existingItem) {
                LessonCategory::where('order', '>=', $order)->increment('order');
            }

            $category->order = $order;
            $category->save();

            $data = [];
            foreach ($request->lang as $index => $key) {
                if ($request->title[$index] && $key != 'en') {
                    Translation::updateOrInsert(
                        ['translationable_type' => 'App\Models\LessonCategory',
                            'translationable_id' => $category->id,
                            'locale' => $key,
                            'key' => 'title'],
                        ['value' => $request->title[$index]]
                    );
                }
            }
            Translation::insert($data);

            DB::commit();

            $output = [
                'success' => 1,
                'msg' => __('Create successfully'),
            ];

        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong'),
            ];
        }

        return redirect()->back()->with($output);
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
            $category = LessonCategory::findOrFail($id);
            $translation = Translation::where('translationable_type','App\Models\LessonCategory')
                                        ->where('translationable_id',$category->id);

            $translation->delete();
            $category->delete();

            $categories = LessonCategory::latest('id')->paginate(10);
            $view = view('backends.lesson-category._table', compact('categories'))->render();

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

    public function updateStatus (Request $request)
    {
        try {
            DB::beginTransaction();

            $category = LessonCategory::findOrFail($request->id);
            $category->status = $category->status == 1 ? 0 : 1;
            $category->save();

            $output = ['status' => 1, 'msg' => __('Status updated')];

            DB::commit();
        } catch (Exception $e) {

            $output = ['status' => 0, 'msg' => __('Something went wrong')];
            DB::rollBack();
        }

        return response()->json($output);
    }
}
