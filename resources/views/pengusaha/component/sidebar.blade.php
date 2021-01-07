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
                        {{-- Iklan --}}
                        <a class="nav-link" href="{{ Route('admin') }}">
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