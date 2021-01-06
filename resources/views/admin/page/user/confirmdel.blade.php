@extends('admin.layouts.app')
@section('judul', 'Delete')
@section('sub-judul','Delete')
@section('description', 'Delete')
@section('breadcrumps')
    
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <h2 class="col-12 text-center">Yakin Mau Menghapus?</h2>
        <h3 class="col-12 text-center">{{ $user->name }} ({{ $user->email }})</h3>
        <form action="{{ Route('admindelstore') }}" method="post" class="my-4 col-12 d-flex justify-content-center">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <button class="btn btn-md btn-danger mr-5 px-5">Delete</button>
            <a href="{{ Route('adminprofil') }}" class="btn btn-md btn-success mx-1 px-5">Tidak</a>
        </form>
        
        
    </div>
</div>
@endsection