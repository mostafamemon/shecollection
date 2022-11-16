<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomProduct;

class HotProduct extends Component
{
    public $hot_products    = [];
    public $backend_url     = "";
    
    public function mount()
    {
        $this->backend_url              = config('app.backend_url');
        $this->hot_products = EcomProduct::select('id','product_name','hot_product_image')->where('hot_product',1)->limit(8)->get();
    }
    
    public function render()
    {
        return view('livewire.home.hot-product');
    }
}
