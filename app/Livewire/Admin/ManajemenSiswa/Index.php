<?php

namespace App\Livewire\Admin\ManajemenSiswa;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = "10";
    public $search = '';
    public function render()
    {
        $siswa = array(
            'siswa' => User::where('role', 'Siswa')->where(function($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate($this->paginate)
        );

        return view('livewire.admin.manajemen-siswa.index', $siswa);
    }
}
