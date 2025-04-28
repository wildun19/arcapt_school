<div>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>
                            <img class="nav-icon fas" src="{{ asset('assets/icons/Users.svg') }}"></img>
                            @yield('title')
                        </h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                @yield('title')
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-plus mr-1"></i>
                                tambah data
                            </button>
                        </div>
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-print mr-1"></i>
                                Cetak
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-success" href="#">
                                    <i class="fas fa-file-excel mr1"></i>
                                    Excel
                                </a>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="fas fa-file-pdf mr1"></i>
                                    PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                Check the Header part you can find Legacy vesion of style.
                </div>

            </div>

        </section>
    </div>

</div>
