<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\updatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /*
     * show profile page
     */
    public function edit() {
        return view('admin.pages.profile.edit');
    }

    /*
     * update the profile date
     */
    public function update(ProfileUpdateRequest $request) {
        $user = Auth::user();
        if($request->hasFile('image')) {
            if(File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->file('image');
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/admin_images'), $imageName);
            $path = 'uploads/admin_images/' . $imageName;
            $user->update($request->only('name', 'email'));
            $user->image = $path;
            $user->save();
            return redirect()->back();

        }

       $user->update($request->only('name', 'email'));
       $user->save();
       return redirect()->back();
    }

    /*
     * update Password
     */

    public function updatePassword(UpdatePasswordRequest $request) {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->back();
    }
}
