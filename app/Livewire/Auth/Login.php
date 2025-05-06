<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        $user = array(
            'title' => 'Login',
        );
        return view('livewire.auth.login');
    }
}
