<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\ContactMessage;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totallessons = Lesson::count();
        $courses = Course::all();
        $totalcourses = count($courses);
        $contacts = ContactMessage::where('isRead',0)->get();
        $totalcontacts = count($contacts);
        return view('backends.index',compact('contacts','totalcourses', 'totalcontacts', 'totallessons'));
    }
}
