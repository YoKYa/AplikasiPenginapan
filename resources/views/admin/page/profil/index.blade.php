@extends('admin.layouts.app')
@section('judul', 'My Profil - '. Auth::user()->name)
@section('sub-judul','My Profil')
@section('description', 'Halaman Profil')

@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-center mt-3 mb-5">
        <span class="rounded-circle shadow" style="width: 150px; height:150px; border:3px solid rgb(29, 4, 87);"></span>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <div class="mb-1 row">
                <label for="name" class="col-sm-2 col-form-label">NAMA </label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="name"
                        value="{{ strtoupper(Auth::user()->name) }}">
                </div>
            </div>
            <div class="mb-1 row">
                <label for="email" class="col-sm-2 col-form-label">EMAIL </label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="role"
                        value="{{ strtoupper(Auth::user()->email) }}">
                </div>
            </div>
            <div class="mb-1 row">
                <label for="role" class="col-sm-2 col-form-label">ROLE</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="role"
                        value="{{ strtoupper(Auth::user()->role) }}">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
    </div>
    <hr>
</div>
@endsection