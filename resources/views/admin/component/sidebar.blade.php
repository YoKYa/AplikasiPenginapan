<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{Route('admin')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Pengguna</span>
                        </a>
                        <div class="collapse" id="collapseExample">
                                <a class="nav-link ml-4" href="{{Route('manageadmin')}}">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Admin</span>
                                </a>
                                <a class="nav-link ml-4" href="{{Route('manageadmin')}}">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Pengusaha Hotel</span>
                                </a>
                                <a class="nav-link ml-4" href="{{Route('manageadmin')}}">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Pelanggan</span>
                                </a>
                        </div>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
            </div>
        </div>
    </div>
</nav>