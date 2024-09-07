<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\updatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /*
     *  view of the profile
     */
    public function edit() {
        $user = Auth::user();
        return view('frontend.dashboard.profile', compact('user'));
    }

    /*
     * update the user data
     */
    public function update(ProfileUpdateRequest $request) {
        // first update the user
        // if there is image add the image and delete the exist one then update it
        $user = Auth::user();
        if ($request->hasFile('image')) {
            if(File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->file('image');
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/user_images'), $imageName);
            $path = 'uploads/user_images/' . $imageName;
            $user->image = $path;
        }
        $user->update($request->only('name', 'email'));
        $user->save();
        toastr()->success('Profile updated successfully!');
        return redirect()->back();

    }

    /*
     *  update password
     */
    public function updatePassword(updatePasswordRequest $request) {
        $request->user()->update(['password' => Hash::make($request->get('password'))]);
        toastr()->success('Password updated successfully!');
        return redirect()->back();
    }
}
