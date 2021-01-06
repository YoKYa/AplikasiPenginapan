@extends('admin.layouts.app')
@section('judul', 'Profil - '. $user->name)
@section('sub-judul','Profil')
@section('description', 'Halaman Profil')

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
            <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <input class="form-control" type="text" value="{{ $user->name }}" id="name" disabled>
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input class="form-control" type="text" value="{{ $user->email }}" id="email" disabled>
            </div>
            <div class="form-group">
                <label for="role" class="form-control-label">Role</label>
                <input class="form-control" type="text" value="{{ strtoupper($user->role) }}" id="email"
                    disabled>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-4">
        <a href="{{ Route('admin') }}/user/edit/{{ $user->id }}" class="btn btn-md btn-primary mx-1 px-5">Edit</a>
        <a href="{{ Route('admin') }}/user/delete/{{ $user->id }}" class="btn btn-md btn-danger mr-5 px-5">Delete</a>
    </div>
    <hr>
</div>
@endsection