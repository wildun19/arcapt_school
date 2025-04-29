<div>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>
                            <img class="nav-icon fas" src="{{ asset('assets/icons/User.svg') }}"></img>
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
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $user_id ? 'Edit User' : 'Tambah User' }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label>Password {{ $user_id ? '(Kosongkan jika tidak ingin diubah)' : '' }}</label>
                            <input wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button wire:click="save" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

</div>
