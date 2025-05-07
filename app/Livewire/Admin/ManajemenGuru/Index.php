<?php

namespace App\Livewire\Admin\ManajemenGuru;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
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

        $guru = new User;
        $guru->name = $this->name;
        $guru->email = $this->email;
        $guru->role = 'Guru';
        $guru->password = Hash::make($this->password);
        $guru->save();

        $this->dispatch('closeCreateModel');
    }

    public function edit($id)
    {
        $this->resetValidation();
        $this->reset([
            'password',
            'password_confirmation',
        ]);
        $guru = User::findOrFail($id);
        $this->name = $guru->name;
        $this->email = $guru->email;
        $this->user_id = $guru->id;
    }

    public function update($id)
    {
        $guru = User::findOrFail($id);
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

        $guru->name = $this->name;
        $guru->email = $this->email;
        $guru->role = 'Guru';
        if ($this->password) {
            $guru->password = Hash::make($this->password);
        }
        $guru->update();

        $this->dispatch('closeEditModel');
    }

    public function destroy($id)
    {
        $guru = User::find($id);
        if ($guru) {
            $guru->delete();

            $this->dispatch('deleteSuccess');
        }
    }

    public function render()
    {
        $guru = array(
            'title' => 'Managemen Guru',
            'guru' => User::where('role', 'Guru')->where(function($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate($this->paginate)
        );
        return view('livewire.admin.manajemen-guru.index', $guru);
    }
}
