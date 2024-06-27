<?php

namespace App\Http\Controllers\Website;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\LessonCategory;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = LessonCategory::orderBy('order', 'asc')->get();
        return view('website.lesson_and_course_detail.course_detail', compact('categories', 'courses'));
    }

    public function getLessonsByCategory($categoryId)
    {
        $lessons = Lesson::where('category_id', $categoryId)
                     ->where('status', 1)
                     ->get();
        return response()->json($lessons);

        return view('website.lesson_and_course_detail.course_detail', compact('courses'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if (!$course) {
            abort(404, 'Course not found');
        }
        $categories = $course->lessonCategories()
                ->orderBy('order', 'asc')
                ->withCount(['lessons' => function ($query) {
                    $query->where('status', 1);
                }])
                ->get();

        return view('website.lesson_and_course_detail.course_detail', compact('course', 'categories'));
    }

    public function showLessonDetail($slug)
    {
        $lesson = Lesson::where('slug',$slug)->first();

        if (!$lesson) {
            abort(404, 'Lesson not found');
        }

        $lessons = Lesson::where('category_id', $lesson->category_id)
            ->where('status', 1)
            ->get();
        $course = $lesson->category->course;

        return view('website.lesson_and_course_detail.lesson_detail', compact('lesson', 'lessons', 'course'));
    }
    
    public function updateViewCount(Request $request)
    {
        $id = $request->id;
        $lesson = Lesson::findOrFail($id);

        if (!in_array($lesson->id, $request->session()->get('key_lesson', []))) {
            $lesson->total_views = $lesson->total_views + 1;
            $lesson->save();

            $existingArray = session('key_lesson', []);
            $newArray = [$lesson->id];
            $mergedArray = array_merge($existingArray, $newArray);
            session(['key_lesson' => $mergedArray]);
        }

        // Return a response if needed, but in this case, it's not necessary for AJAX
        return response()->json(['message' => 'View count updated successfully.']);
    }
}
