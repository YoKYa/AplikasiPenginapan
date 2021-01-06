@extends('admin.layouts.app')
@section('judul', 'Edit Profil - ' . $user->name)
@section('sub-judul','Edit Profil')
@section('description', 'Halaman Edit Profil')

@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-center mt-3 mb-5">
        <img src="{{ asset('/storage'.$user->dp_path) }}" alt="Profil" class="rounded-circle"
            style="width: 150px; height:150px; border:3px solid rgb(29, 4, 87);">
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <form action="{{ Route('adminedituserstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <label for="name" class="form-control-label">Nama</label>
                    <input class="form-control" type="text" value="{{ $user->name }}" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input class="form-control" type="text" value="{{ $user->email }}" id="email" name="email">
                </div>
                <label for="dp" class="form-control-label">Foto Profil</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dp" lang="en" name="dp" accept="image/*"
                        value="{{ $user->dp_path }}">
                    <label class="custom-file-label" for="dp">Select file</label>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <button type="submit" name="Save" class="btn btn-md btn-primary"
                        style="width: 200px">Simpan</button>
                </div>

            </form>
            <hr>
            <h2>Edit Password</h2>
            <form action="{{ Route('updatepassstore') }}" method="post">
                @csrf
                <label for="oldpass" class="form-control-label">Password Lama</label>
                <input class="form-control" type="password" id="oldpass" name="oldpass">
                <label for="newpass" class="form-control-label">Password Baru</label>
                <input class="form-control" type="password" id="newpass" name="newpass">
                <label for="repass" class="form-control-label">Ulangi Password Baru</label>
                <input class="form-control" type="password" id="repass" name="repass">
                <div class="d-flex justify-content-center my-4">
                    <button type="submit" name="Save" class="btn btn-md btn-primary"
                        style="width: 200px">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <hr>
</div>
@endsection