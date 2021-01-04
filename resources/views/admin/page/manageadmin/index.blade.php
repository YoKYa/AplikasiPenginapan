@extends('admin.layouts.app')
@section('judul','Manage Admin')
@section('description', 'Deskripsi Manage Admin')
@section('breadcrumps')
{{ Breadcrumbs::render('ManageAdmin') }}
@endsection
@section('sub-judul','Tampil Data Admin')

@section('content')

<!-- Light table -->
<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort" data-sort="name">Nama</th>
                <th scope="col" class="sort" data-sort="budget">Email</th>
                <th scope="col" class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-success mr-2" style="border:2px solid #5e72e4" href="#"
                            role="button" aria-haspopup="true">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="list">
            @foreach ($admin as $result => $hasil)
            <tr>
                <th>{{ $result + $admin->firstitem() }}</th>
                <th scope="row">
                    <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                        </a>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">{{ $hasil->name}}</span>
                        </div>
                    </div>
                </th>
                <td>
                    {{ $hasil->email}}
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Hapus</a>
                        </div>
                    </div>
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
            {{ $admin->links() }}
        </ul>
    </nav>
</div>
@endsection
