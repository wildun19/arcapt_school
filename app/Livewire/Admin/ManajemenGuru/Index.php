<?php

namespace App\Livewire\Admin\ManajemenGuru;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $guru = array(
            'guru' => User::get()->where('role', 'Guru')
        );
        return view('livewire.admin.manajemen-guru.index', $guru);
    }
}
