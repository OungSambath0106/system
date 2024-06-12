<?php

namespace App\Http\Middleware;

use App\Models\BusinessSetting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetSessionData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user')) {

            $user = Auth::user();

            $session_data = $user;

            $business = new BusinessSetting;

            $copy_right_text = @$business->where('type', 'copy_right_text')->first()->value;

            $request->session()->put('copy_right_text', $copy_right_text);

            $app_icon = @$business->where('type', 'fav_icon')->first()->value;

            $request->session()->put('app_icon', $app_icon);

            $app_logo = @$business->where('type', 'web_header_logo')->first()->value;

            $request->session()->put('app_logo', $app_logo);

            $app_name = @$business->where('type', 'company_name')->first()->value;

            $request->session()->put('app_name', $app_name);

            $phone = @$business->where('type', 'phone')->first()->value;

            $request->session()->put('phone', $phone);

            $telegram = @$business->where('type', 'telegram')->first()->value;

            $request->session()->put('telegram', $telegram);

            $about_club = @$business->where('type', 'about_club')->first()->value;

            $request->session()->put('about_club', $about_club);

            $company_address = @$business->where('type', 'company_address')->first()->value;

            $request->session()->put('company_address', $company_address);

            // $request->session()->put('business', $business);
            // $request->session()->put('currency', $currency_data);

        }

        return $next($request);
    }
}
