<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function halamanutama()
    {
        return view('halamanutama.index');
    }

    public function detailhotel()
    {
        return view('halamanutama.page.detailhotel.index');
    }
}
