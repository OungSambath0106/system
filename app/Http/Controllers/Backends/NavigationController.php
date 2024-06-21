<?php

namespace App\Http\Controllers\Backends;

use App\helpers\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class NavigationController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::select('name','id')
                ->pluck('name','id');
        return view('backends.user.update_profile', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'user_id' => 'required|unique:users,user_id,' . $id,
            'phone' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // 'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
            'password' => 'nullable|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with(['success' => 0, 'msg' => __('Invalid form input')]);
        }

        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->name = $request->username;
            $user->user_id = $request->user_id;
            $user->phone = $request->phone;
            $user->telegram = $request->telegram ?? null;
            $user->email = $request->email;

            $role_id        = $request->role;
            $user_role      = $user->roles->first();
            $previous_role  = !empty($user_role->id) ? $user_role->id : 0;
            if ($previous_role != $role_id) {
                if (!empty($previous_role)) {
                    $user->removeRole($user_role->name);
                }

                $role = Role::findOrFail($role_id);
                $user->assignRole($role->name);
            }

            if ($request->password) {
                $user->password = Hash::make($request['password']);
            }
            if ($request->hasFile('image')) {
                $user->image = ImageManager::update('uploads/users/', $user->image, $request->image);
            }

            $user->save();

            DB::commit();
            $output = [
                'success' => 1,
                'msg' => __('Created successfully')
            ];
        } catch (Exception $e) {
            dd($e);
            DB::rollBack();
            $output = [
                'success' => 0,
                'msg' => __('Something went wrong')
            ];
        }

        return redirect()->route('admin.dashboard')->with($output);
    }
}
