<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomBanner;

class BlockBannerOne extends Component
{
    public $banners    = "";
    public $backend_url = "";

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        $this->banners    = EcomBanner::where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.home.block-banner-one');
    }
}
