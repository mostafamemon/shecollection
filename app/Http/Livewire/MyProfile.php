<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;
use App\Models\User;

class MyProfile extends Component
{
    use LivewireAlert;

    public $name         = "";
    public $phone        = "";
    public $email        = "";
    public $delivery_location = "";
    public $address      = "";

    public function mount()
    {
        if(Auth::user()) {
            $this->name     = Auth::user()->name;
            $this->phone    = Auth::user()->phone;
            $this->email    = Auth::user()->email;
            $this->delivery_location = Auth::user()->delivery_location;
            $this->address  = Auth::user()->address;
        }
        else {
            return redirect()->to('/login');
        }
    }

    public function input_validation() 
    {
        $error = 0;

        $phone_count = User::where('phone',$this->phone)->where('id','!=',Auth()->user()->id)->count();
        if($phone_count > 0) { $this->addError('phone','phone number already used!'); $error = $error + 1; }

        if($this->email != "") {
            $email_count = User::where('email',$this->email)->where('id','!=',Auth()->user()->id)->count();
            if($email_count > 0) { $this->addError('email','email already used!'); $error = $error + 1; }
        }
        if($error > 0) return $error;
        else return 0;
    }

    public function update()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        
        $validation_error = $this->input_validation();
        if($validation_error > 0) return;

        $user           = User::where('id',Auth()->user()->id)->first();
        $user->name     = $this->name;
        $user->phone    = $this->phone;
        $user->email    = $this->email;
        $user->delivery_location = $this->delivery_location;
        $user->address  = $this->address;
        $user->save();
        $this->confirm('Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.my-profile');
    }
}
