@extends('admin.layouts.app')
@section('judul')
{{ $data->judul  ?? "Tambah Judul"}}
@endsection
@section('sub-judul','Iklan')
@section('description', 'Halaman Iklan')
@section('breadcrumps')
    
@endsection
@section('content')
<form method="post" action="{{ (request()->is('admin/iklan/add') ? Route('admincreateiklan') : Route('adminiklan').'/edit') }}">
    @csrf
    <input type="text" value="{{ $data->id ?? ''}}" hidden name="id">
    <label for="judul">Judul</label>
    <input type="text" name="judul" id="judul" value="{{ $data->judul ?? '' }}"><br>
    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $data->deskripsi ?? '' }}</textarea>
    <button type="submit">Submit</button>
</form>
@endsection