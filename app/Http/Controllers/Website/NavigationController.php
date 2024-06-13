<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('website.layout.navbar', compact('courses'));
    }
}
