<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
        ]);
        try {
            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

                // $user = Auth::user()->getRoleNames();
                $user = User::findOrFail(auth()->user()->id);
                $user_roles = $user->getRoleNames()->toArray();

                // dd($user_roles);
                if (in_array('admin', $user_roles)) {
                    return redirect()->route('admin.dashboard');
                }
                if (in_array($user_roles[0], ['normal-user'])) {
                    return redirect()->route('home');
                }

            } else {
                // dd(0);
                return response()->json([
                    'status' => 0,
                    'msg' => __('Invalid credentials')
                ]);
            }

        } catch (Exception $e) {
                return response()->json([
                    'status' => 0,
                    'msg' => __('Something went wrong')
                ]);
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}