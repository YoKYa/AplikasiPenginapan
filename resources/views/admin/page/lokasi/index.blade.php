@extends('admin.layouts.app')
@section('judul', 'Data Master - Lokasi')
@section('sub-judul','Data Lokasi')
@section('description', 'Halaman Lokasi')
@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-around">
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">PROVINSI</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{ $provinsi->count() }} Provinsi
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasiprovinsi') }}" class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">KABUPATEN/KOTA</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{ $kabupaten->count() }} Kabupaten/Kota
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasikabupaten') }}" class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">KECAMATAN</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{ $kecamatan->count() }} Kecamatan
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasikecamatan') }}" class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">DESA</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{ $desa->count() }} Desa
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasidesa') }}" class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection