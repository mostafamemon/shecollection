<?php

namespace App\Http\Livewire\Product;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\EcomProduct;

class ProductList extends Component
{
    use LivewireAlert;

    public $category_id     = "";
    public $sub_cagegory_id = "";
    public $filter_type     = "";
    public $search_text     = "";
    public $products        = [];
    public $backend_url     = "";

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(isset($_GET['s'])) {
            $this->search_text = $_GET['s'];
            $this->filter();
        }
    }

    public function filter()
    {
        if($this->search_text != "") {
            $this->products = EcomProduct::where('product_name','like','%'.$this->search_text.'%')->limit(40)->get();
        } else {
            $this->products = EcomProduct::limit(40)->get();
        }
    }

    public function add_to_cart()
    {
        $this->confirm('Added to your cart');
    }

    public function render()
    {
        return view('livewire.product.product-list');
    }
}
