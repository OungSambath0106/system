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
        $lessons = Lesson::where('category_id', $categoryId)->get();
        return response()->json($lessons);

        return view('website.lesson_and_course_detail.course_detail',compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $categories = $course->lessonCategories()
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->withCount(['lessons' => function ($query) {
                $query->where('category_id', '!=', null); // Adjust this line if necessary
            }])
            ->get();
        return view('website.lesson_and_course_detail.course_detail', compact('course', 'categories'));
    }

    public function showLessonDetail($id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            abort(404, 'Lesson not found');
        }

        $lessons = Lesson::where('category_id', $lesson->category_id)
                        ->where('status', 1)
                        ->get();
        $course = $lesson->category->course;

        return view('website.lesson_and_course_detail.lesson_detail', compact('lesson', 'lessons', 'course'));
    }
}
