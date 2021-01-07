@extends('admin.layouts.app')
@section('judul', 'Provinsi - Daftar Kabupaten')
@section('sub-judul','Provinsi '.$data->first()->province->name)
@section('description', 'Provinsi '.$data->first()->province->name)
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
                                <a href="{{ Route('adminlokasi') }}/p/{{ $hasil->province->first()->id }}/{{ $hasil->id }}" class="btn btn-primary">Lihat Kabupaten</a>
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