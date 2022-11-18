<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.layouts.logout');
    }
}
