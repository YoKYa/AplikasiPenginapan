<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.component.topnav')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">@yield('judul')</h6>
                        @include('admin.component.breadcrumps')
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0">@yield('sub-judul')</h3>
                    </div>