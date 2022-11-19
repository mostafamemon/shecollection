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
    public $delivery_location = "outside_dhaka";

    public $login_username = "";
    public $login_password = "";

    public function input_validation() 
    {
        $error = 0;

        $username_count = User::where('username',$this->username)->count();
        if($username_count > 0) { $this->addError('username','username already used!'); $error = $error + 1; }

        $phone_count = User::where('phone',$this->phone)->count();
        if($phone_count > 0) { $this->addError('phone','phone number already used!'); $error = $error + 1; }

        if($this->email != "") {
            $email_count = User::where('email',$this->email)->count();
            if($email_count > 0) { $this->addError('email','email already used!'); $error = $error + 1; }
        }
        if($error > 0) return $error;
        else return 0;
    }

    public function register()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        
        $validation_error = $this->input_validation();
        if($validation_error > 0) return;

        $user               = new User();
        $user->username     = $this->username;
        $user->name         = $this->name;
        $user->email        = $this->email;
        $user->phone        = $this->phone;
        $user->password     = Hash::make($this->password);
        $user->address      = $this->address;
        $user->delivery_location = $this->delivery_location;
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
