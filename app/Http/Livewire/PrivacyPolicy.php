<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EcomTextContent;

class PrivacyPolicy extends Component
{
    public $privacy_policy = "";

    public function mount()
    {
        $contents = EcomTextContent::select('privacy_policy')->where('id',1)->first();
        if($contents != "") {
            $this->privacy_policy        = $contents->privacy_policy;
        }
    }

    public function render()
    {
        return view('livewire.privacy-policy');
    }
}
