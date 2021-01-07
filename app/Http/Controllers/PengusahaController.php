<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengusahaController extends Controller
{
    // Dashboard
    public function login()
    {
        return view('pengusaha.page.dashboard.index');
    }
}
