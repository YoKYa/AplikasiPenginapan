@extends('admin.layouts.app')
@section('judul', 'Lokasi')
@section('sub-judul',(request()->is('admin/lokasi/provinsi') ? 'Provinsi':(request()->is('admin/lokasi/kabupaten') ?
'Kabupaten' : (request()->is('admin/lokasi/kabupaten') ? 'Kecamatan' : 'Desa') ) ))
@section('description', 'Provinsi')
@section('breadcrumps')

@endsection
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">No.</th>
                        <th scope="col" class="sort" data-sort="budget">ID</th>
                        <th scope="col" class="sort" data-sort="status">Name</th>
                        <th scope="col" class="sort" data-sort="status">View</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($data as $result => $hasil)
                    <tr>
                        <th scope="row">
                            {{ $result + $data->firstitem() }}
                        </th>
                        <td class="budget">
                            {{ $hasil->id }}
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{ $hasil->name }}</span>
                            </span>
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <a href="{{ Route('adminlokasi') }}/p/{{ (request()->is('admin/lokasi/provinsi') ? $hasil->id : (request()->is('admin/lokasi/kabupaten') ? $hasil->province->id.'/'.$hasil->id : (request()->is('admin/lokasi/kecamatan') ? $hasil->province->id.'/'.$hasil->regency->id.'/'.$hasil->id : '' )))  }}" class="status btn btn-primary">{{ (request()->is('admin/lokasi/provinsi') ? 'Lihat Kabupaten':(request()->is('admin/lokasi/kabupaten') ?
                                    'Lihat Kecamatan' : (request()->is('admin/lokasi/kabupaten') ? 'Lihat Desa' : '-') ) ) }}</a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- Card footer -->
<div class="card-footer py-4">
    <nav>
        <ul class="pagination justify-content-end mb-0">
            {{ $data->links() }}
        </ul>
    </nav>
</div>
@endsection