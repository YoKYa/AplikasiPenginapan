@extends('admin.layouts.app')
@section('judul', 'Iklan '.$data->judul)
@section('sub-judul','Iklan '.$data->judul)
@section('description', 'Halaman Iklan')
@section('breadcrumps')
    
@endsection
@section('content')
<h1>{{ $data->judul }}</h1>
<p>{{ $data->deskripsi }}</p>
<small>last update {{ $data->updated_at }} created on {{ $data->created_at }} </small>
@endsection