<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Course;
use App\Models\ContactMessage;
use App\Models\BusinessSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // global variable
        view()->composer('*', function ($view) {
            $business_setting = new BusinessSetting;
            $languages = $business_setting->where('type', 'language')->first()->value;

            $langs = array_reduce(json_decode($languages, true), function ($result, $language) {
                if ($language['status'] == 1) {
                    $result[$language['name']] = $language['code'];
                }
                return $result;

            }, []);

            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', $langs);
        });
        // view()->composer('*',function($view) {
        //     $view->with('user', Auth::user());
        //     $view->with('social', Social::all());
        //     // if you need to access in controller and views:
        //     Config::set('something', $something);
        // });

        View::composer('*', function ($view) {
            $courses = Course::paginate(10);
            $view->with('courses', $courses);
        });

        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();


        // Using view composer to share data across all views
        View::composer('backends.layout.header', function ($view) {
            $view->with('contactmail', ContactMessage::count());
            $view->with('contacts', ContactMessage::where('isRead', 0)->latest()->take(4)->get());

            // $latestContactMessage = ContactMessage::latest()->first();
            // if ($latestContactMessage) {
            //     $view->with('latestContactMessage', $latestContactMessage);
            //     $view->with('time', $latestContactMessage->created_at->format('H:i'));
            // } else {
            //     $view->with('latestContactMessage', null);
            //     $view->with('time', null);
            // }
        });

    }

}
