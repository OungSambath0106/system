<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\LessonCategory;
use App\Models\Course;
use Illuminate\Http\Request;

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
        $categories = $course->lessonCategories()->orderBy('order', 'asc')->get();
        return view('website.lesson_and_course_detail.course_detail', compact('course', 'categories'));
    }

    public function showLessonDetail($id)
    {
        $lesson = Lesson::find($id);   
        $lessons = Lesson::where('category_id', $lesson->category_id)->get();
        $course = $lesson->category->course;

        if (!$lesson) {
            abort(404, 'Lesson not found');
        }

        return view('website.lesson_and_course_detail.lesson_detail', compact('lesson', 'lessons', 'course'));
    }

}
