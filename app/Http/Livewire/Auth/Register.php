<?php

namespace App\Http\Livewire\Auth;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User;
use Hash;
use Auth;

class Register extends Component
{
    use LivewireAlert;

    public $username    = "";
    public $name        = "";
    public $email       = "";
    public $phone       = "";
    public $password    = "";
    public $address     = "";

    public $login_username = "";
    public $login_password = "";

    public function register()
    {
        $user               = new User();
        $user->username     = $this->username;
        $user->name         = $this->name;
        $user->email        = $this->email;
        $user->phone        = $this->phone;
        $user->password     = Hash::make($this->password);
        $user->address      = $this->address;
        $user->save();

        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            return redirect('/');
        }
    }

    public function login()
    {
        if(Auth::attempt(['username' => $this->login_username, 'password' => $this->login_password])){
            return redirect('/');
        } else {
            $this->confirm('Invalid username / password !', [
                'icon' => 'warning'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
