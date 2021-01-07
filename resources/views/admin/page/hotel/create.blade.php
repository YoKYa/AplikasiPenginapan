@extends('admin.layouts.app')
@section('judul', 'Tambah Hotel')
@section('sub-judul','Tambah Hotel')
@section('description', 'Halaman Tambah Hotel')
@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ Route('adminhotelcreate') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="hotel">Nama Hotel</label>
        <input type="text" name="nama_hotel" id="hotel">
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="input">Pemilik</label>
            </div>
            <select class="custom-select" id="input" name="user_id">
                <option selected disabled>Pilih</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name  }}</option>
                @endforeach

            </select>
        </div>
        <label for="alamat">Alamat</label>
        <textarea name="alamat_hotel" id="alamat" cols="30" rows="10">

        </textarea>
        <br>
        <label for="jml">Jumlah Kamar</label>
        <input type="number" name="jumlah_kamar" id="jml">
        <br>
        <br>
        <label for="harga">harga</label>
        <input type="number" name="harga" id="harga">
        <br>
        <div class="input-group m-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="input" name="file_verify">
                <label class="custom-file-label" for="input">Choose file</label>
            </div>
        </div>
        <input type="checkbox" aria-label="Checkbox for following text input" name="ver" id="ver">
        <label for="ver">Terverifikasi</label>
        <button type="submit">Simpan</button>
    </form>
</div>

@endsection