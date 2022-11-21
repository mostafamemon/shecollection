<?php

namespace App\Http\Livewire\Product;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\EcomProduct;
use App\Models\EcomCart;
use App\Models\EcomWishList;
use Auth;

class ProductSingle extends Component
{
    use LivewireAlert;
    
    public $backend_url = "";
    public $product     = "";
    public $related_products = [];

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(isset($_GET['id'])) {
            $this->product = EcomProduct::where('id',$_GET['id'])->first();
            if($this->product->sub_category_id != 0 || $this->product->sub_category_id != "") {
                $this->related_products = EcomProduct::select('id','product_name','in_stock','product_page_main_image','price','user_rating')->where('id','!=',$this->product->id)->where('sub_category_id',$this->product->sub_category_id)->limit(6)->get();
            } else {
                $this->related_products = EcomProduct::select('id','product_name','in_stock','product_page_main_image','price','user_rating')->where('id','!=',$this->product->id)->where('category_id',$this->product->category_id)->limit(6)->get();
            }
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
        return view('livewire.product.product-single');
    }
}
