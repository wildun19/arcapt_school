<div>
    <div class="login-box">
        <div class="login-logo">
          <img src="{{ asset('adminlte3/dist/img/logo.png') }}" width="150px" alt="">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h2 class="login-box-msg">Login</h2>

                <form wire:submit="login">
                    @csrf
                    <div class="row mt-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" wire:model="email" class="form-control @error('email')
                            is-invalid
                        @enderror" placeholder="Massukkan Email">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="row mt-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" wire:model="password" class="form-control @error('password')
                            is-invalid
                        @enderror" placeholder="Massukkan Password">
                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
