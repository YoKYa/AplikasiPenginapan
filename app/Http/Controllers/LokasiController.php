<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $provinsi = Province::all();
        $kabupaten = Regency::all();
        $kecamatan = District::all();
        $desa = Village::all();
        return view('admin.page.lokasi.index', compact('provinsi','kabupaten', 'kecamatan', 'desa'));
    }
    public function provinsi()
    {
        $data = Province::paginate(10);
        return view('admin.page.lokasi.views', compact('data'));
    }
    public function kabupaten()
    {
        $data = Regency::paginate(10);
        return view('admin.page.lokasi.views', compact('data'));
    }
    public function kecamatan()
    {
        $data = District::paginate(10);
        return view('admin.page.lokasi.views', compact('data'));
    }
    public function desa()
    {
        $data = District::paginate(10);
        return view('admin.page.lokasi.views', compact('data'));
    }
    public function lihatkabupaten($prov)
    {
        $data = Regency::where('province_id',$prov)->paginate(10);
        return view('admin.page.lokasi.satu', compact('data'));    
    }
    public function lihatkecamatan($prov, $kab)
    {
        $data = District::where('regency_id',$kab)->paginate(10);
        return view('admin.page.lokasi.dua', compact('data'));    
    }
    public function lihatdesa($prov, $kab, $kec)
    {
        $data = Village::where('district_id',$kec)->paginate(10);
        return view('admin.page.lokasi.tiga', compact('data'));    
    }
    public function dedesa($prov,$kab,$kec,$ds)
    {
        $data = Village::where('id', $ds)->first();
        return view('admin.page.lokasi.desa',compact('data'));
    }
}
