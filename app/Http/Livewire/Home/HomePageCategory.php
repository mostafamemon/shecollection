<?php

namespace App\Http\Livewire\Home;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\EcomCategory;
use App\Models\EcomProduct;
use App\Models\EcomCart;
use App\Models\EcomWishList;
use Auth;

use Livewire\Component;

class HomePageCategory extends Component
{
    use LivewireAlert;

    public $home_page_ctg_1                = "";
    public $backend_url_1                  = "";
    public $sub_category_id_1              = "";
    public $filter_by_type_1               = "";
    public $products_1                     = [];

    public $home_page_ctg_2                = "";
    public $backend_url_2                  = "";
    public $sub_category_id_2              = "";
    public $filter_by_type_2               = "";
    public $products_2                     = [];

    public $home_page_ctg_3                = "";
    public $backend_url_3                  = "";
    public $sub_category_id_3              = "";
    public $filter_by_type_3               = "";
    public $products_3                     = [];

    public function mount()
    {
        $this->backend_url_1       = config('app.backend_url');
        $this->backend_url_2       = $this->backend_url_1;
        $this->backend_url_3       = $this->backend_url_1;
        $this->home_page_ctg_1     = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(0)->limit(1)->first(); 
        $this->home_page_ctg_2     = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(1)->limit(1)->first(); 
        $this->home_page_ctg_3     = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(2)->limit(1)->first(); 
        $this->filter_1();
        $this->filter_2();
        $this->filter_3();
    }

    public function changeFilterByType_1($filter_by_type_1)
    {
        $this->filter_by_type_1   = $filter_by_type_1;
        $this->filter_1();
    }

    public function chageSubCategory_1($sub_category_id_1)
    {
        $this->sub_category_id_1 = $sub_category_id_1;
        $this->filter_1();
    }

    public function changeFilterByType_2($filter_by_type_2)
    {
        $this->filter_by_type_2   = $filter_by_type_2;
        $this->filter_2();
    }

    public function chageSubCategory_2($sub_category_id_2)
    {
        $this->sub_category_id_2 = $sub_category_id_2;
        $this->filter_2();
    }

    public function changeFilterByType_3($filter_by_type_3)
    {
        $this->filter_by_type_3   = $filter_by_type_3;
        $this->filter_3();
    }

    public function chageSubCategory_3($sub_category_id_3)
    {
        $this->sub_category_id_3 = $sub_category_id_3;
        $this->filter_3();
    }

    public function filter_1()
    {
        if($this->home_page_ctg_1 != "") {
            $products_1 = EcomProduct::where('category_id',$this->home_page_ctg_1->id);
            if($this->filter_by_type_1 != "") {
                if($this->filter_by_type_1 == "new_arrival") {
                    $products_1->where('new_arrival',1);
                }
                if($this->filter_by_type_1 == "top_selling") {
                    $products_1->where('top_selling',1);
                }
                if($this->filter_by_type_1 == "best_rated") {
                    $products_1->where('best_rated',1);
                }
            }
            if($this->sub_category_id_1 != "") {
                $products_1->where('sub_category_id',$this->sub_category_id_1);
            }
            $this->products_1 = $products_1->orderBy('product_name','asc')->limit(6)->get();
        }
    }

    public function filter_2()
    {
        if($this->home_page_ctg_2 != "") {
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

    public function filter_3()
    {
        if($this->home_page_ctg_3 != "") {
            $products_3 = EcomProduct::where('category_id',$this->home_page_ctg_3->id);
            if($this->filter_by_type_3 != "") {
                if($this->filter_by_type_3 == "new_arrival") {
                    $products_3->where('new_arrival',1);
                }
                if($this->filter_by_type_3 == "top_selling") {
                    $products_3->where('top_selling',1);
                }
                if($this->filter_by_type_3 == "best_rated") {
                    $products_3->where('best_rated',1);
                }
            }
            if($this->sub_category_id_3 != "") {
                $products_3->where('sub_category_id',$this->sub_category_id_3);
            }
            $this->products_3 = $products_3->orderBy('product_name','asc')->limit(6)->get();
        }
    }

    public function add_to_cart($product_id)
    {
        if(Auth::user()) {
            $already_added = EcomCart::where('user_id',Auth::user()->id)->where('product_id',$product_id)->first();
            if($already_added == "") {
                $cart               = new EcomCart();
                $cart->user_id      = Auth::user()->id;
                $cart->product_id   = $product_id;
                $cart->quantity     = 1;
                $cart->save();
                $this->emit('updateCart');
                $this->confirm('Added to your cart');
            } else {
                $this->confirm('Already added !', [
                    'icon' => 'warning'
                ]);
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function add_to_wishlist($product_id)
    {
        if(Auth::user()) {
            $already_added = EcomWishList::where('user_id',Auth::user()->id)->where('product_id',$product_id)->first();
            if($already_added == "") {
                $cart               = new EcomWishList();
                $cart->user_id      = Auth::user()->id;
                $cart->product_id   = $product_id;
                $cart->quantity     = 1;
                $cart->save();
                $this->emit('updateWishList');
                $this->confirm('Added to your Wishlist');
            } else {
                $this->confirm('Already added !', [
                    'icon' => 'warning'
                ]);
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function render()
    {
        return view('livewire.home.home-page-category');
    }
}
