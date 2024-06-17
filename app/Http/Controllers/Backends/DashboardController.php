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
        $totalcourses = Course::count();
        $totalunreadcontacts = ContactMessage::where('isRead', 0)->count();
        return view('backends.index', compact('totalcourses', 'totalunreadcontacts', 'totallessons'));
    }
}
