<?php

namespace App\Livewire\Admin\ManajemenSiswa;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $siswa = array(
            'siswa' => User::get()->where('role', 'Siswa')
        );
        return view('livewire.admin.manajemen-siswa.index', $siswa);
    }
}
