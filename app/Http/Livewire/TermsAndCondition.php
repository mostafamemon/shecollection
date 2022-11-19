<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EcomTextContent;

class TermsAndCondition extends Component
{
    public $terms_and_condition = "";

    public function mount()
    {
        $contents = EcomTextContent::select('terms_and_conditions')->where('id',1)->first();
        if($contents != "") {
            $this->terms_and_condition = $contents->terms_and_conditions;
        }
    }

    public function render()
    {
        return view('livewire.terms-and-condition');
    }
}
