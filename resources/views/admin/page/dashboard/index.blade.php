@extends('admin.layouts.app')
@section('judul', 'Dashboard Admin')
@section('description', 'Deskripsi Admin')
@section('breadcrumps')
{{ Breadcrumbs::render('Dashboard') }}
@endsection

@section('content')
halo admin
@endsection
