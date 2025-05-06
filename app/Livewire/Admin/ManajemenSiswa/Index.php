<?php

namespace App\Livewire\Admin\ManajemenSiswa;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = "10";
    public $search = '';

    public $name, $email, $password, $password_confirmation;
    public $user_id;

    public function create(){
        $this->resetValidation();
        $this->reset([
            'name',
            'email',
            'password',
            'password_confirmation',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ], [
            'name.required' => 'Name Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.email' => 'Email Tidak Valid',
            'email.unique' => 'Email Sudah terdaftar',
            'password.required' => 'passsword Tidak Boleh Kosong',
            'password.min' => 'passsword Minimal 8 Karakter',
            'password.confirmed' => 'passsword Konfirmasi Tidak Sama',
            'password_confirmation.required' => 'Password Konfirmasi Tidak Boleh Kosong',
        ]);

        $siswa = new User;
        $siswa->name = $this->name;
        $siswa->email = $this->email;
        $siswa->role = 'Siswa';
        $siswa->password = Hash::make($this->password);
        $siswa->save();

        $this->dispatch('closeCreateModel');
    }

    public function edit($id)
    {
        $this->resetValidation();
        $this->reset([
            'password',
            'password_confirmation',
        ]);
        $siswa = User::findOrFail($id);
        $this->name = $siswa->name;
        $this->email = $siswa->email;
        $this->user_id = $siswa->id;
    }

    public function update($id)
    {
        $siswa = User::findOrFail($id);
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8|confirmed',
        ], [
            'name.required' => 'Name Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.email' => 'Email Tidak Valid',
            'email.unique' => 'Email Sudah terdaftar',
            'password.min' => 'passsword Minimal 8 Karakter',
            'password.confirmed' => 'passsword Konfirmasi Tidak Sama',
        ]);

        $siswa->name = $this->name;
        $siswa->email = $this->email;
        $siswa->role = 'Siswa';
        if ($this->password) {
            $siswa->password = Hash::make($this->password);
        }
        $siswa->update();

        $this->dispatch('closeEditModel');
    }

    public function destroy($id)
    {
        $siswa = User::find($id);
        if ($siswa) {
            $siswa->delete();

            $this->dispatch('deleteSuccess');
        }
    }

    public function render()
    {
        $siswa = array(
            'title' => 'Managemen User',
            'siswa' => User::where('role', 'Siswa')->where(function($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate($this->paginate)
        );

        return view('livewire.admin.manajemen-siswa.index', $siswa);
    }
}
