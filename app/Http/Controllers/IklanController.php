<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    public function index()
    {
        $data = Iklan::paginate(10);
        return view('admin.page.iklan.index', compact('data'));
    }
    public function view($id)
    {
        $data = Iklan::where('id', $id)->first();
        return view('admin.page.iklan.view', compact('data'));
    }
    public function edit($id)
    {
        $data = Iklan::where('id', $id)->first();
        return view('admin.page.iklan.create', compact('data'));
    }
    public function create()
    {
        return view('admin.page.iklan.create');
    }
    public function store(Request $request)
    {
        Iklan::insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return back()->with(['status' => 'Iklan Berhasil ditambah.']);
    }
    public function editstore(Request $request)
    {
        $iklan = Iklan::where('id',$request->id)->first();
        $iklan->judul = $request->judul;
        $iklan->deskripsi = $request->deskripsi;
        $iklan->save();
        return back()->with(['status' => 'Iklan Berhasil diupdate.']);
    }
    public function delete(Request $request)
    {
        $iklan = Iklan::where('id',$request->id)->first();
        $iklan->delete();
        return back()->with(['status' => 'Iklan Berhasil dihapus.']);
    }
}
