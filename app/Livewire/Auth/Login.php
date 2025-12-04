<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
        public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'O campo email é obrigatório',
        'email.email' => 'Formato de email imválido',
        'password' => 'O campo senha é obrigatório',
        'password.min' => 'O campo senha deve conter pelo menos 6 caracteres'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            if (Auth::user()->user_type === 'funcionario' && Auth::user()->funcionario->cargo === 'professor') {
                return redirect()->route('funcionarioProfessor.dashboard');
            }
            if (Auth::user()->user_type === 'funcionario' && Auth::user()->funcionario->cargo === 'secretaria') {
                return redirect()->route('funcionario.dashboard');
            }

            if (Auth::user()->user_type === 'aluno') {
             return redirect()->route('aluno.dashboard');
            }
            
            if (Auth::user()->user_type === 'admin') {
             return redirect()->route('admin.dashboard');
            }
        }
        session()->flash('error', 'Email ou senha incorretos');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
