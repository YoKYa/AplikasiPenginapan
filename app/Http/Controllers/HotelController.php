<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Regency;
use App\Models\Province;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    // Admin
    public function index()
    {
        $hotel = Hotel::paginate(10);
        return view('admin.page.hotel.index',compact('hotel'));
    }
    public function create()
    {
        $users = User::where('role','pelanggan')->orwhere('role', 'pengusaha')->get();
        return view('admin.page.hotel.create',compact('users'));
    }
    public function storecreate(Request $request)
    {
        $request->validate([
            'user_id'       => 'required',
            'nama_hotel'    => 'required',
            'alamat_hotel'  => 'required',
            'jumlah_kamar'  => 'required',
            'harga'         => 'required',
            'file_verify'   => 'required',
        ]);
        // Check if a profile image has been uploaded
        if ($request->has('file_verify')) {
            // Get image file
            $image = $request->file('file_verify');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->nama_hotel) . '_' . time();
            // Define folder path
            $folder = '/uploads/file/verify/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            UploadTrait::uploadOne($image, $folder, 'storage', $name);
            // Set user profile image path in database to filePath
            $filePath;
            if ($request->has('ver')) {
                $ver = now();
            }else {
                $ver = null;
            }
            $user = User::where('id',$request->user_id)->where('role', 'pelanggan')->first();
            Hotel::insert([
                'user_id'       => $request->user_id,
                'nama_hotel'    => $request->nama_hotel,
                'alamat_hotel'  => $request->alamat_hotel,
                'jumlah_kamar'  => $request->jumlah_kamar,
                'harga'         => $request->harga,
                'file_verify'   => $filePath,
                'verified_at'   => $ver
            ]);
        }
        return back()->with(['status' => 'Berhasil disimpan.']);
    }
    public function verifyhotel()
    {
        $hotel = Hotel::where('verified_at',null)->paginate(10);
        return view('admin.page.hotel.verify',compact('hotel'));
    }
    public function view($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        return view('admin.page.hotel.view',compact('hotel'));
    }
    public function verifyhotelstore(Request $request)
    {
        if(isset($request->verify)){
            $hotel = Hotel::where('id', $request->verify)->first();
            $hotel->verified_at = date('Y-m-d');
            $hotel->save();
            return back()->with(['status' => 'Berhasil Verify Hotel.']);
        }else {
            return back()->with(['error' => 'Gagal']);
        }
        
    }
}
