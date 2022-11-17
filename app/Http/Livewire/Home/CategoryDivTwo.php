<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;
use App\Models\EcomProduct;

class CategoryDivTwo extends Component
{
    public $home_page_ctg_2               = "";
    public $backend_url_2                 = "";
    public $sub_category_id_2             = "";
    public $filter_by_type_2              = "";
    public $products_2                    = [];

    public function mount()
    {
        $this->backend_url_2       = config('app.backend_url');
        $this->home_page_ctg_2     = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(1)->limit(1)->first(); 
        $this->filter_2();
    }

    public function changeFilterByType($filter_by_type_2)
    {
        $this->filter_by_type_2   = $filter_by_type_2;
        $this->filter_2();
    }

    public function chageSubCategory($sub_category_id_2)
    {
        $this->sub_category_id_2 = $sub_category_id_2;
        $this->filter_2();
    }

    public function filter_2()
    {
        if($this->home_page_ctg_2 == "") {
            $this->products = [];
        } else {
            $products_2 = EcomProduct::where('category_id',$this->home_page_ctg_2->id);
            if($this->filter_by_type_2 != "") {
                if($this->filter_by_type_2 == "new_arrival") {
                    $products_2->where('new_arrival',1);
                }
                if($this->filter_by_type_2 == "top_selling") {
                    $products_2->where('top_selling',1);
                }
                if($this->filter_by_type_2 == "best_rated") {
                    $products_2->where('best_rated',1);
                }
            }
            if($this->sub_category_id_2 != "") {
                $products_2->where('sub_category_id',$this->sub_category_id_2);
            }
            $this->products_2 = $products_2->orderBy('product_name','asc')->limit(6)->get();
            
        }
    }

    public function render()
    {
        return view('livewire.home.category-div-two');
    }
}
