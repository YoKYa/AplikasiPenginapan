<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.page.dashboard.index');
    }

    public function manageadmin()
    {
        $admin = User::where('role', 'admin')->paginate(1);
        return view ('admin.page.manageadmin.index', compact('admin'));
    }
    public function managepengusaha()
    {
        $admin = User::where('role', 'pengusaha')->paginate(1);
        return view ('admin.page.manageadmin.index', compact('admin'));
    }
    public function managepelanggan()
    {
        $admin = User::where('role', 'pelanggan')->paginate(1);
        return view ('admin.page.manageadmin.index', compact('admin'));
    }
    public function managehotel()
    {
        
    }
    public function adminprofil()
    {
        return view('admin.page.profil.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
