<?php

namespace App\Http\Controllers\Website;

use App\helpers\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class AccountController extends Controller
{
    public function profile()
    {
        if(!Auth::check()){
            return redirect()->route('home');
        }
        $user = auth()->user();
        return view('website.account.profile', compact('user'));
    }

    public function profileUpdate($id, Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8|confirmed',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            DB::beginTransaction();

            // dd($request->all());
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->telegram = $request->telegram;
            if ($request->password) {
                $user->password = Hash::make($request['password']);
            }

            if ($request->hasFile('image')) {
                $user->image = ImageManager::upload('uploads/users/', $request->image);
            }

            $user->save();

            DB::commit();
            return redirect()->back()->with(['success' => 1, 'msg' => __('Update successfully')]);

        } catch (Exception $e) {
            DB::rollBack();
            return back()->with([
                'success' => 0,
                'msg' => __('Something went wrong.')
            ]);
        }
    }

    public function profileStore(Request $request)
    {
        $rules = [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'name'          => 'required',
            'phone'         => 'required|unique:users',
            'email'         => 'required|unique:users',
            'password'      => 'nullable|min:8|confirmed',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $output = ['success' =>false, 'msg' => $validator->messages()->first()];
        }

        try {
            DB::beginTransaction();
            // dd($request->all());
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->telegram = $request->telegram;
            if ($request->filled('password') && $request->has('password')) {
                $user->password = Hash::make($request['password']);
            }
            $user->assignRole('normal-user');
            $user->status = 'request';

            if ($request->hasFile('image')) {
                $user->image = ImageManager::update('uploads/users/', $user->image, $request->image);
            }

            $user->save();
            // Auth::attempt(['email' => $user->email, 'password' => $request['password']]);

            DB::commit();

            // $output = ['success' =>true, 'msg' => __('Register successfully. Please wait approve by admin')];
            // return redirect()->route('home')->with($output);
            return redirect()->back()->with(['success' => 1, 'msg' => __('Your account has been register. Please wait for admin approval.')]);

        } catch (Exception $e) {
            DB::rollBack();
            $output = [
                'success' => false,
                'msg' => __('Something went wrong.')
            ];
            return redirect()->route('home')->with($output);
        }

        // return $output;

    }
}
