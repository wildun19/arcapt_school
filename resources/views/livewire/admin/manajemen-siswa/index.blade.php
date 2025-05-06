<div>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>
                            <img class="nav-icon fas" src="{{ asset('assets/icons/Users.svg') }}"></img>
                            {{ $title }}
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
                                {{ $title }}
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
                            {{-- <a href="{{ route('admin.manajemen-siswa.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus mr-1"></i>tambah data
                            </a> --}}
                            <button  wire:click="create" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createModel">
                                <i class="fas fa-plus mr-1"></i>tambah data
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

                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-2">
                            <select wire:model.live="paginate" class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div>
                            <input wire:model.live="search" type="text" class="form-control" placeholder="search">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>
                                        <i class="fas fa-cog"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ ($siswa->currentPage() - 1) * $siswa->perPage() + $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        {{-- <a href="{{ route('admin.manajemen-siswa.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a> --}}
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModel">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button wire:click="destroy({{ $item->id }})" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $siswa->links() }}
                    </div>
                </div>

                {{-- @if ($confirmDelete)
                    <div class="modal fade show d-block" tabindex="-1" role="dialog" style="background: rgba(0,0,0,0.5);">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" wire:click="batalDelete" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah kamu yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" wire:click="destroy" class="btn btn-danger">Ya, Hapus</button>
                                    <button type="button" wire:click="batalDelete" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}

            </div>

        </section>
        {{-- create Model --}}
        @include('livewire.admin.manajemen-siswa.tambah')

        @script
            <script>
                $wire.on('closeCreateModel', ()=>{
                    $('#createModel').modal('hide');
                    Swal.fire({
                        title: "Success",
                        text: "Data Berhasil Ditambah",
                        icon: "success"
                    });
                });
            </script>
        @endscript

        {{-- Edit Model --}}
        @include('livewire.admin.manajemen-siswa.ubah')

        @script
            <script>
                $wire.on('closeEditModel', ()=>{
                    $('#editModel').modal('hide');
                    Swal.fire({
                        title: "Success",
                        text: "Data Berhasil Di Update",
                        icon: "success"
                    });
                });
            </script>
        @endscript

        {{-- delete Model --}}
        @script
            <script>
                $wire.on('deleteSuccess', ()=>{
                    Swal.fire({
                        title: "Success",
                        text: "Data Berhasil Dihapus",
                        icon: "success"
                    });
                });
            </script>
        @endscript
    </div>

</div>
