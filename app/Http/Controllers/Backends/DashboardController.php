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
    public function header()
    {
        $contacts = ContactMessage::where('isRead', 0)->latest()->take(4)->get();
        $contactmail = ContactMessage::where('isRead', 0)->latest()->count();
        // $latestContactMessage = ContactMessage::latest()->first();
        // $time = $latestContactMessage ? $latestContactMessage->created_at->format('H:i') : null;
        return view('backends.layout.header', compact('contacts', 'contactmail'));
    }
    public function unreadMessagesCount()
    {
        $unreadCount = ContactMessage::where('isRead', 0)->count();
        return response()->json(['unread_count' => $unreadCount]);
    }
}
