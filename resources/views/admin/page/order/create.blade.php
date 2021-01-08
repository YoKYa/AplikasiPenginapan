@extends('admin.layouts.app')
@section('judul', 'Tambah Order')
@section('sub-judul','Tambah Order')
@section('description', 'Tambah Order')
@section('breadcrumps')

@endsection
@section('content')
<form action="{{ Route('admincreateorder') }}" method="post">
    @csrf
    <input type="text">
</form>
@endsection