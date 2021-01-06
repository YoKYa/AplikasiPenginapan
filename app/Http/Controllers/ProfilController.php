<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    // Admin
    public function adminprofil()
    {
        return view('admin.page.profil.index');
    }
    public function admineditprofil()
    {
        return view('admin.page.profil.edit');
    }
    public function admineditprofilstore(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'email'             => 'required',
            'dp'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = User::findOrFail(Auth::user()->id);

        // Set user name
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Check if a profile image has been uploaded
        if ($request->has('dp')) {
            // Get image file
            $image = $request->file('dp');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/uploads/images/dp/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            UploadTrait::uploadOne($image, $folder, 'storage', $name);
            // Set user profile image path in database to filePath
            $user->dp_path = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
    public function adminupdatepass(Request $request)
    {
        
        $request->validate([
            'oldpass'     =>  'required | min:6',
            'newpass'     =>  'required | min:6',
            'newpass'     =>  'required | min:6',
        ]);
        
        if (Hash::check($request->oldpass, Auth::user()->password)) {
            if ($request->newpass == $request->repass) {
                $user = User::findOrFail(Auth::user()->id);
                $user->update(['password' => Hash::make($request->newpass)]);
                
                return redirect()->back()->with(['status' => 'Password Update successfully.']);
            }
            return redirect()->back()->with(['error' => 'Gagal Ganti Pass.']);
        }else {
            return redirect()->back()->with(['error' => 'Gagal Ganti Pass.']);
        }
        
    }
}
