<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EcomTextContent;

class CancellationAndReturn extends Component
{
    public $cancellation_and_return = "";

    public function mount()
    {
        $contents = EcomTextContent::select('cancellation_and_return')->where('id',1)->first();
        if($contents != "") {
            $this->cancellation_and_return  = $contents->cancellation_and_return;
        }
    }

    public function render()
    {
        return view('livewire.cancellation-and-return');
    }
}
