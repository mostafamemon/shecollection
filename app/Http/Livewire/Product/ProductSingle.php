<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\EcomProduct;

class ProductSingle extends Component
{
    public $backend_url = "";
    public $product     = "";
    public $related_products = [];

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(isset($_GET['id'])) {
            $this->product = EcomProduct::where('id',$_GET['id'])->first();
            if($this->product->sub_category_id != 0 || $this->product->sub_category_id != "") {
                $this->related_products = EcomProduct::where('id','!=',$this->product->id)->where('sub_category_id',$this->product->sub_category_id)->limit(6)->get();
            } else {
                $this->related_products = EcomProduct::where('id','!=',$this->product->id)->where('category_id',$this->product->category_id)->limit(6)->get();
            }
        }
    }

    public function render()
    {
        return view('livewire.product.product-single');
    }
}
