<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EcomCart;
use Auth;

class Cart extends Component
{
    public $delivery = "";
    public $name     = "";
    public $phone    = "";
    public $email    = "";
    public $address  = "";
    public $delivery_location  = "";

    public function mount()
    {
        if(Auth::user() && Auth::user()->id) {
            $this->carts = EcomCart::where('user_id',Auth::user()->id)
                        ->join('ecom_products', 'ecom_products.id', '=', 'ecom_carts.product_id')
                        ->select(
                            'ecom_carts.id as cart_id',
                            'ecom_carts.quantity',
                            'ecom_products.id as product_id',
                            'ecom_products.product_name',
                            'ecom_products.price',
                            'ecom_products.in_stock',
                            'ecom_products.product_page_main_image'
                        )
                        ->get();
        } else {
            return redirect()->to('/login');
        }
    }

    public function removeItem($cart_id)
    {
        EcomCart::where('id',$cart_id)->delete();
        return redirect()->to('/cart');
    }

    public function addQuantity($cart_id)
    {
        $cart = EcomCart::where('id',$cart_id)->first();
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        return redirect()->to('/cart');
    }

    public function reduceQuantity($cart_id)
    {
        $cart = EcomCart::where('id',$cart_id)->first();
        if($cart->quantity > 1) {
            $cart->quantity = $cart->quantity - 1;
            $cart->save();
        }

        return redirect()->to('/cart');
    }

    public function deliveryCharge()
    {

    }

    public function render()
    {
        return view('livewire.cart');
    }
}
