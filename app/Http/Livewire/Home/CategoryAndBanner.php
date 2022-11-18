<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;
use App\Models\EcomBanner;

class CategoryAndBanner extends Component
{
    public $categories = [];
    public $banners    = "";
    public $backend_url = "";
    
    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        $this->categories = EcomCategory::select('id','category_name')->orderBy('category_name','asc')->get();
        $this->banners    = EcomBanner::where('id',1)->first();
    }

    public function render()
    {
        return view('livewire.home.category-and-banner');
    }
}
