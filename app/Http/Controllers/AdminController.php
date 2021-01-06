<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('admin.page.dashboard.index');
    }


}
