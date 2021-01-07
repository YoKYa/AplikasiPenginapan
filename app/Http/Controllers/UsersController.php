<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Admin
    public function adminuseradmin()
    {
        $admin = User::where('role', 'admin')->paginate(10);
        return view('admin.page.manageadmin.index', compact('admin'));
    }
    public function adminuserpengusaha()
    {
        $admin = User::where('role', 'pengusaha')->paginate(10);
        return view('admin.page.manageadmin.index', compact('admin'));
    }
    public function adminuserpelanggan()
    {
        $admin = User::where('role', 'pelanggan')->paginate(0);
        return view('admin.page.manageadmin.index', compact('admin'));
    }
    public function admindeluser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.page.user.confirmdel', compact('id', 'user'));
    }
    public function admindeluserstore(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();
        return redirect(Route('admin'))->with(['status' => 'User Delete successfully.']);
    }
    public function adminadduser()
    {
        return view('admin.page.user.add');
    }
    public function adminadduserstore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::insert([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
        return redirect()->back()->with(['status' => 'User Berhasil ditambah.']);
    }
    public function adminviewuser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.page.user.view', compact('user'));
    }
    public function adminedituser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.page.user.edit', compact('user'));
    }
    public function adminedituserstore(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
            'email'             => 'required',
            'dp'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = User::findOrFail($request->id);

        // Set user name
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

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
        $pass = User::findOrFail($request->id)->password;
        dd($pass);
        
        if (Hash::check($request->oldpass, Auth::user()->password)) {
            if ($request->newpass == $request->repass) {
                $user = User::findOrFail(Auth::user()->id);
                $user->update(['password' => Hash::make($request->newpass)]);
                
                return redirect()->back()->with(['status' => 'Password Update successfully.']);
            }
        }
    }
}
