<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\EcomTextContent;

class PcHeaderTop extends Component
{
    public $support_email   = "";
    public $phone           = "";
    public $hotline         = "";
    public $address         = "";
    public $facebook_link   = "http://facebook.com";
    public $youtube_link    = "http://youtube.com";
    public $instagram_link  = "http://instagram.com";

    public function mount()
    {
        $contents = EcomTextContent::select('support_email','phone','hotline','address','facebook_link','youtube_link','instagram_link')->where('id',1)->first();
        if($contents != "") {
            $this->support_email        = $contents->support_email;
            $this->phone                = $contents->phone;
            $this->hotline              = $contents->hotline;
            $this->address              = $contents->address;
            $this->facebook_link        = $contents->facebook_link;
            $this->youtube_link         = $contents->youtube_link;
            $this->instagram_link       = $contents->instagram_link;
        }
    }

    public function render()
    {
        return view('livewire.layouts.pc-header-top');
    }
}
