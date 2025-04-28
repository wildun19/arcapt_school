<?php

namespace App\Livewire\Admin\ManajemenGuru;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
    public $search = '';
    public function render()
    {
        $guru = array(
            'guru' => User::where('role', 'Guru')->where(function($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
                })->paginate($this->paginate)
        );
        return view('livewire.admin.manajemen-guru.index', $guru);
    }
}
