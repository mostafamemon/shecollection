<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\EcomCart;
use App\Models\EcomOrder;
use App\Models\EcomOrderDetail;
use Auth;

class Cart extends Component
{
    use LivewireAlert;

    public $name     = "";
    public $phone    = "";
    public $email    = "";
    public $address  = "";
    public $delivery_location  = "";
    public $delivery_charge    = "";

    public $backend_url = "";
    public $carts       = [];

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        $this->name         = Auth::user()->name;
        $this->email        = Auth::user()->email;
        $this->phone        = Auth::user()->phone;
        $this->address      = Auth::user()->address;
        $this->delivery_location = Auth::user()->delivery_location;
        if($this->delivery_location == "inside_dhaka") {
            $this->delivery_charge = config('app.delivery_charge_inside_dhaka');
        } else {
            $this->delivery_charge = config('app.delivery_charge_outside_dhaka');
        }

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

    public function onchange_delivery_location()
    {
        if($this->delivery_location == "inside_dhaka") {
            $this->delivery_charge = config('app.delivery_charge_inside_dhaka');
        } else {
            $this->delivery_charge = config('app.delivery_charge_outside_dhaka');
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

    public function checkout($total_price,$delivery_charge,$grand_total)
    {
        if($total_price == 0) {
            $this->confirm('Nothing to checkout !', [
                'icon' => 'warning'
            ]);
        } else {
            $order                      = new EcomOrder();
            $order->user_id             = Auth()->user()->id;
            $order->total               = $total_price;
            $order->delivery_charge     = $delivery_charge;
            $order->grand_total         = $grand_total;
            $order->order_date_time     = date('Y-m-d H:i:s');
            $order->name                = $this->name;
            $order->phone               = $this->phone;
            $order->email               = $this->email;
            $order->address             = $this->address;
            $order->delivery_location   = $this->delivery_location;
            $order->save();

            foreach($this->carts as $cart) {
                $order_detail               = new EcomOrderDetail();
                $order_detail->order_id     = $order->id;
                $order_detail->product_id   = $cart->product_id;
                $order_detail->unit_price   = $cart->price;
                $order_detail->quantity     = $cart->quantity;
                $order_detail->grand_total  = $cart->price * $cart->quantity;
                $order_detail->save();
            }

            EcomCart::where('user_id',Auth::user()->id)->delete();
            return redirect()->to('/success-page');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
