<?php

namespace App\Http\Controllers\Backends;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        // return Lesson::orderBy('total_views', 'desc')->get();
        $topLessons = Lesson::orderByDesc('total_views')
            ->take(5)
            ->get();
        $rankedLessons = $topLessons->map(function ($lesson, $index) {
            $lesson->rank = $index + 1; // Add a rank property to each lesson
            return $lesson;
        });

        $filters = $request->all();
        $viewsByMonth = Lesson::whereIn('id', $topLessons->pluck('id')->toArray())
            ->select(
                DB::raw('MONTH(updated_at) as month'),
                // DB::raw('SUM(total_views) as total_views')
            )
            ->groupBy(DB::raw('MONTH(updated_at)'))
            ->orderBy(DB::raw('MONTH(updated_at)'))
            ->get();


        $totalusers = User::count();
        $totallessons = Lesson::count();
        $totalcourses = Course::count();
        $totalunreadcontacts = ContactMessage::where('isRead', 0)->count();
        return view('backends.index', compact('topLessons', 'totalusers', 'viewsByMonth', 'rankedLessons', 'totalcourses', 'totalunreadcontacts', 'totallessons'));
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
