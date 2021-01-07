@extends('admin.layouts.app')
@section('judul', 'Iklan')
@section('sub-judul','Iklan')
@section('description', 'Halaman Iklan')
@section('breadcrumps')
    
@endsection
@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="no">No.</th>
                        <th scope="col" class="sort" data-sort="id">ID</th>
                        <th scope="col" class="sort" data-sort="judul">Judul</th>
                        <th scope="col" class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-success mr-2" style="border:2px solid #5e72e4" href="{{ Route('admincreateiklan') }}"
                                    role="button" aria-haspopup="true">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </th>
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
                                <span class="status">{{ $hasil->judul }}</span>
                            </span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="{{ Route('adminiklan') }}/{{ $hasil->id }}">View</a>
                                    <a class="dropdown-item" href="{{ Route('adminiklan') }}/edit/{{ $hasil->id }}">Edit</a>
                                    <form action="{{ Route('admindeleteiklan') }}" method="post">
                                        <input type="hidden" name="id" value="{{ $hasil->id }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Hapus</button>
                                    </form>
                                    
                                </div>
                            </div>
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