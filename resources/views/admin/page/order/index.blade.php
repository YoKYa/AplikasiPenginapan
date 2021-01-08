@extends('admin.layouts.app')
@section('judul', 'Order')
@section('sub-judul','Order')
@section('description', 'Halaman Order')
@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <div class="my-3 d-flex justify-content-center ">
        <a href="{{ Route('admincreateorder') }}" class="border rounded px-5 py-2 bg-primary text-white">Tambah Order</a>
    </div>
    <div class="d-flex justify-content-around">
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">Semua Order</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{-- {{ $provinsi->count() }} Provinsi --}}
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasiprovinsi') }}"
                        class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">Order Berjalan</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{-- {{ $kabupaten->count() }} Kabupaten/Kota --}}
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasikabupaten') }}"
                        class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">Order Selesai</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{-- {{ $kecamatan->count() }} Kecamatan --}}
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasikecamatan') }}"
                        class="btn btn-primary d-flex justify-content-center">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h2 class="card-title">DE</h2>
                    <p class="card-text">
                        <div class="my-3">
                            {{-- {{ $desa->count() }} Desa --}}
                        </div>
                    </p>
                    <a href="{{ Route('adminlokasidesa') }}" class="btn btn-primary d-flex justify-content-center">Lihat
                        Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection