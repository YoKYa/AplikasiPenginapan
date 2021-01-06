@extends('admin.layouts.app')
@section('judul', 'Tambah Pengguna')
@section('sub-judul','Tambah Pengguna')
@section('description', 'Tambah Pengguna')
@section('breadcrumps')

@endsection
@section('content')
<div class="d-flex justify-content-center mt-3">
    <div class="col-6">
        <form action="{{ Route('useraddstore') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input class="form-control" type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pass" class="form-control-label">Password</label>
                <input class="form-control" type="password" id="newpass" name="password" required>
            </div>
            <div class="form-group">
                <label for="repass" class="form-control-label">Ulangi Password</label>
                <input class="form-control" type="password" id="repass" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="Role" class="form-control-label" for="role">Role</label>
                <select class="custom-select" id="role" required name="role">
                    <option selected disabled>Pilih...</option>
                    <option value="admin">Admin</option>
                    <option value="pengusaha">Pengusaha</option>
                    <option value="pelanggan">Pelanggan</option>
                </select>
            </div>


            <div class="d-flex justify-content-center my-4">
                <button type="submit" name="Save" class="btn btn-md btn-primary" style="width: 200px">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection