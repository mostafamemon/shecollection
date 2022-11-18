<?php

namespace App\Http\Livewire\Product;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\EcomProduct;

class ProductList extends Component
{
    use LivewireAlert;

    public $category_id     = "";
    public $sub_category_id = "";
    public $filter_by       = "";
    public $search_text     = "";
    public $products        = [];
    public $backend_url     = "";

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(isset($_GET['search'])) {
            $this->category_id      = "";
            $this->sub_cagegory_id  = "";
            $this->filter_by        = "";
            $this->search_text = $_GET['search'];
            $this->filter();
        }
        if(isset($_GET['category'])) {
            $this->search_text      = "";
            $this->sub_cagegory_id  = "";
            $this->filter_by        = "";
            $this->category_id = $_GET['category'];
            $this->filter();
        }
        if(isset($_GET['subcategory'])) {
            $this->search_text      = "";
            $this->category_id      = "";
            $this->filter_by        = "";
            $this->sub_category_id = $_GET['subcategory'];
            $this->filter();
        }
        if(isset($_GET['filter'])) {
            $this->search_text      = "";
            $this->cagegory_id      = "";
            $this->sub_cagegory_id  = "";
            $this->filter_by        = $_GET['filter'];
            $this->filter();
        }
    }

    public function filter()
    {
        if($this->search_text != "") {
            $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('keywords','like','%'.$this->search_text.'%')->limit(40)->get();
        }
        if($this->category_id != "") {
            $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('category_id',$this->category_id)->limit(40)->get();
        }
        if($this->sub_category_id != "") {
            $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('sub_category_id',$this->sub_category_id)->limit(40)->get();
        }
        if($this->filter_by != "") {
            if($this->filter_by == "new_arrival") {
                $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('new_arrival',1)->limit(40)->get();
            } elseif($this->filter_by == "top_selling") {
                $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('top_selling',1)->limit(40)->get();
            } elseif($this->filter_by == "best_rated") {
                $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('best_rated',1)->limit(40)->get();
            } elseif($this->filter_by == "hot_product") {
                $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('hot_product',1)->limit(40)->get();
            } elseif($this->filter_by == "clearense") {
                $this->products = EcomProduct::select('id','product_name','product_page_main_image')->where('clearense',1)->limit(40)->get();
            }
        }
        if($this->search_text == "" && $this->category_id == "" && $this->sub_category_id == "" && $this->filter_by == "") {
            $this->products = EcomProduct::select('id','product_name','product_page_main_image')->limit(40)->get();
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
