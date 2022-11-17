<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;
use App\Models\EcomProduct;

class CategoryDivOne extends Component
{
    public $home_page_ctg_1             = "";
    public $backend_url                 = "";
    public $sub_category_id             = "";
    public $filter_by_type              = "";
    public $products                    = [];

    public function mount()
    {
        $this->backend_url       = config('app.backend_url');
        $this->home_page_ctg_1   = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(0)->limit(1)->first(); 
        $this->filter();
    }

    public function changeFilterByType($filter_by_type)
    {
        $this->filter_by_type   = $filter_by_type;
        $this->filter();
    }

    public function chageSubCategory($sub_category_id)
    {
        $this->sub_category_id = $sub_category_id;
        $this->filter();
    }

    public function filter()
    {
        $products = EcomProduct::where('category_id',$this->home_page_ctg_1->id);
        if($this->filter_by_type != "") {
            if($this->filter_by_type == "new_arrival") {
                $products->where('new_arrival',1);
            }
            if($this->filter_by_type == "top_selling") {
                $products->where('top_selling',1);
            }
            if($this->filter_by_type == "best_rated") {
                $products->where('best_rated',1);
            }
        }
        if($this->sub_category_id != "") {
            $products->where('sub_category_id',$this->sub_category_id);
        }
        $this->products = $products->orderBy('product_name','asc')->limit(6)->get();
        
    }

    public function render()
    {
        return view('livewire.home.category-div-one');
    }
}
