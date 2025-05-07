<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        if (Auth::attempt($this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ])))
        {
            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages([
            'email' => 'Email not found',
            'password' => 'Password is wrong',
        ]);


        // $user = User::where('email', $this->email)->first();

        // if (!$user) {
        //     return response([
        //         'message' => ['Email not found'],
        //     ], 404);
        // }

        // if (!Hash::check($this->password, $user->password)) {
        //     return response([
        //         'message' => ['Password is wrong'],
        //     ], 404);
        // }

        // return redirect()->route('dashboard');
    }

    public function render()
    {
        $user = array(
            'title' => 'Login',
        );
        return view('livewire.auth.login');
    }
}
