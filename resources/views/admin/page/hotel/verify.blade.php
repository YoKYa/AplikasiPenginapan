@extends('admin.layouts.app')
@section('judul', 'Data Master - Hotel')
@section('sub-judul','Semua Hotel')
@section('description', 'Halaman Hotel')
@section('breadcrumps')

@endsection
@section('content')
<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort" data-sort="name">Nama Hotel</th>
                <th scope="col" class="sort" data-sort="budget">Pemilik</th>
                <th scope="col" class="sort" data-sort="budget">Verified</th>
                <th scope="col" class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-success mr-2" style="border:2px solid #5e72e4"
                            href="{{ Route('adminhotelcreate') }}" role="button" aria-haspopup="true">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="list">
            @foreach ($hotel as $result => $hasil)
            <tr>
                <th>{{ $result + $hotel->firstitem() }}</th>
                <th scope="row"> {{ $hasil->nama_hotel}}</th>
                <td>
                    {{ $hasil->user->name }}
                </td>
                <td>
                    {{ ($hasil->verified_at == null ? 'Belum': 'Sudah') }}
                </td>
                <td class="text-right">
                <a href="{{ Route('adminhotel') }}/{{ $hasil->id }}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div>

</div>

<!-- Card footer -->
<div class="card-footer py-4">
    <nav>
        <ul class="pagination justify-content-end mb-0">
            {{ $hotel->links() }}
        </ul>
    </nav>
</div>
@endsection