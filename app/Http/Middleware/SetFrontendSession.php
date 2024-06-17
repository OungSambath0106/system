<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use App\Models\Event;

class SetFrontendSession
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
        $business = new BusinessSetting;

        $copy_right_text = @$business->where('type', 'copy_right_text')->first()->value;
        $app_logo = @$business->where('type', 'web_header_logo')->first()->value;
        $web_banner_logo = @$business->where('type', 'web_banner_logo')->first()->value;

        $request->session()->put('copy_right_text', $copy_right_text);
        $request->session()->put('app_logo', $app_logo);
        $request->session()->put('web_banner_logo', $web_banner_logo);

        return $next($request);
    }
}
