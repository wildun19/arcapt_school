<div wire:ignore.self class="modal fade" id="editModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md  modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-edit mr-1"></i>
                Edit Guru
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label for="name" class="form-label">Name</label>
                    <span class="text-danger"> *</span>
                    <input type="text" wire:model="name" class="form-control @error('name')
                        is-invalid
                    @enderror" placeholder="Massukkan Name">
                    @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="row mt-2">
                    <label for="email" class="form-label">Email</label>
                    <span class="text-danger"> *</span>
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
                    <span class="text-danger"> *</span>
                    <input type="password" wire:model="password" class="form-control @error('password')
                        is-invalid
                    @enderror" placeholder="Massukkan Password">
                    @error('password')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="row mt-2">
                    <label for="password_confirmation" class="form-label">Password Konfirmasi</label>
                    <span class="text-danger"> *</span>
                    <input type="password" wire:model="password_confirmation" class="form-control @error('password_confirmation')
                        is-invalid
                    @enderror" placeholder="Massukkan Password Confirmasi">
                    @error('password_confirmation')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                <i class="fa fa-times mr-1"></i>
                Close
            </button>
            <button wire:click="update({{ $user_id }})" type="button" class="btn btn-sm btn-warning">
                <i class="fa fa-edit mr-1"></i>
                Update
            </button>
            </div>
        </div>
    </div>
</div>
