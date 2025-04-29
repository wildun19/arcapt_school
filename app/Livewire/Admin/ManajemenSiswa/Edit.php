<?php

namespace App\Livewire\Admin\ManajemenSiswa;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public $user_id;
    public $name, $email, $password, $role;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'nullable|string|min:6',
        'role' => 'required|string',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $user = User::findOrFail($id);
            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->role = $user->role;

            // Update rule: ignore current email
            $this->rules['email'] = 'required|email|unique:users,email,' . $user->id;
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->user_id) {
            $user = User::findOrFail($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
                'password' => $this->password ? Hash::make($this->password) : $user->password,
            ]);
            session()->flash('message', 'User berhasil diupdate.');
        } else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
                'password' => Hash::make($this->password ?? '123456'),
            ]);
            session()->flash('message', 'User berhasil ditambahkan.');
        }

        return redirect()->route('admin.manajemen-siswa.index');
    }
    public function render()
    {
        return view('livewire.admin.manajemen-siswa.edit');
    }
}
