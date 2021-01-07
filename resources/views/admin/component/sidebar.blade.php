<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- Dashboard --}}
                        <a class="nav-link {{ (request()->is('admin') ? 'active' : '') }} " href="{{ Route('admin') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        {{-- Administrasi --}}
                        <a class="nav-link " data-toggle="collapse" href="#administrasi" role="button"
                            aria-expanded="false" aria-controls="administrasi">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Administrasi</span>
                        </a>
                        <div class="collapse" id="administrasi">
                            <a class="nav-link ml-4" href="{{ Route('manageadmin') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Admin</span>
                            </a>
                            <a class="nav-link ml-4" href="{{ Route('managepengusaha') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Pengusaha Hotel</span>
                            </a>
                            <a class="nav-link ml-4" href="{{Route('managepelanggan')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Pelanggan</span>
                            </a>
                        </div>
                        {{-- Pengguna --}}
                        <a class="nav-link {{ (request()->is('admin/user/admin')|| request()->is('admin/user/pengusaha') || request()->is('admin/user/pelanggan') ? 'active' : '') }}"
                            data-toggle="collapse" href="#pengguna" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Pengguna</span>
                        </a>
                        <div class="collapse {{ (request()->is('admin/user/admin')|| request()->is('admin/user/pengusaha') || request()->is('admin/user/pelanggan') ? 'show' : '') }}"
                            id="pengguna">
                            <a class="nav-link ml-4" href="{{ Route('manageadmin') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Admin</span>
                            </a>
                            <a class="nav-link ml-4" href="{{ Route('managepengusaha') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Pengusaha Hotel</span>
                            </a>
                            <a class="nav-link ml-4" href="{{Route('managepelanggan')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Pelanggan</span>
                            </a>
                        </div>
                        {{-- Laporan --}}
                        <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="false"
                            aria-controls="laporan">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Laporan</span>
                        </a>
                        <div class="collapse " id="laporan">
                            <a class="nav-link ml-4" href="{{ Route('manageadmin') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Laporan Hotel</span>
                            </a>
                            <a class="nav-link ml-4" href="{{ Route('managepengusaha') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Laporan Pesanan</span>
                            </a>
                            <a class="nav-link ml-4" href="{{Route('managepelanggan')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Lapor Pak</span>
                            </a>
                        </div>
                        {{-- Data Master --}}
                        <a class="nav-link" data-toggle="collapse" href="#DataMaster" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Data Master</span>
                        </a>
                        <div class="collapse {{ (request()->is('admin/lokasi') ? 'show' : '') }} " id="DataMaster">
                            <a class="nav-link ml-4" href="{{ Route('adminlokasi') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Lokasi</span>
                            </a>
                            <a class="nav-link ml-4" href="{{ Route('adminlokasi') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Hotel</span>
                            </a>
                        </div>
                        {{-- Iklan --}}
                        <a class="nav-link {{ request()->is('admin/iklan') ?'active':'' }}" href="{{ Route('adminiklan') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Iklan</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                {{-- H --}}
                <small class="copyright text-center  text-lg-left  text-muted">RentRoom Project 2021</small>
            </div>
        </div>
    </div>
</nav>