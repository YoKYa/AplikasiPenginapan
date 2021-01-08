@extends('admin.layouts.app')
@section('judul', 'View Hotel')
@section('sub-judul','View Hotel')
@section('description', 'View Hotel')
@section('breadcrumps')

@endsection
@section('content')
Nama Hotel : {{ $hotel->nama_hotel }} <br>
Pemilik Hotel : {{ $hotel->user->name }} <br>
Alamat Hotel : {{ $hotel->alamat_hotel }} <br>
Jumlah Kamar : {{ $hotel->jumlah_kamar }} <br>
Harga : {{ $hotel->harga }} <br>
<form action="{{ Route('verifyhotelstore') }}" method="post">
    @csrf
    <input type="hidden" name="verify" value="{{ $hotel->id }}">
    <?php if ($hotel->verified_at == null) { ?>
    <button type="submit" class="btn btn-primary">Setuju Verifikasi</button>
    <?php } else { ?>
    Di verifikasi pada : {{ $hotel->verified_at }}
    <?php } ?>
</form>
@endsection