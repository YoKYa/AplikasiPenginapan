@extends('admin.layouts.app')
@section('judul', 'Tambah Order')
@section('sub-judul','Tambah Order')
@section('description', 'Tambah Order')
@section('breadcrumps')

@endsection
@section('content')
<div class="container">
    <form action="{{ Route('admincreateorder') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="pemesan">Pemesan</label>
            </div>
            <select class="custom-select" id="pemesan" name="user_id">
                <option selected disabled>Pilih</option>
                {{-- @foreach ($users as $user) --}}
                {{-- <option value="{{ $user->id }}">{{ $user->name  }}</option> --}}
                {{-- @endforeach --}}
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="Hotel">Hotel</label>
            </div>
            <select class="custom-select" id="Hotel" name="hotel_id">
                <option selected disabled>Pilih</option>
                {{-- @foreach ($users as $user) --}}
                {{-- <option value="{{ $user->id }}">{{ $user->name  }}</option> --}}
                {{-- @endforeach --}}
            </select>
        </div>
        <div class="form-group row">
            <label for="Checkin" class="col-2 col-form-label">Rent in</label>
            <div class="col-10">
                <input class="form-control" type="date" value="2011-08-19" id="Checkin">
            </div>
        </div>
        <div class="form-group row">
            <label for="Checkout" class="col-2 col-form-label">Rent Out</label>
            <div class="col-10">
                <input class="form-control" type="date" value="2011-08-19" id="Checkout">
            </div>
        </div>
        {{-- <div class="custom-file">
            <input type="file" class="custom-file-input" id="dp" lang="en" name="dp" accept="image/*"
                value="{{ Auth::user()->dp_path }}">
            <label class="custom-file-label" for="dp">Select file</label>
        </div> --}}
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary px-5 my-3">Kirim</button>
        </div>
        
    </form>
</div>


@endsection