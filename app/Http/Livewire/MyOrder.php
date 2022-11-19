<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\EcomOrder;
use App\Models\EcomOrderDetail;

class MyOrder extends Component
{
    public $orders          = [];
    public $order_details   = [];
    public $backend_url     = "";

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(Auth::user()) {
            $this->orders  = EcomOrder::where('user_id',Auth::user()->id)->orderBy('id','desc')->limit(30)->get();
        }
        else {
            return redirect()->to('/login');
        }
    }

    public function order_details($order_id)
    {
        $this->order_details = EcomOrderDetail::where('order_id',$order_id)
                            ->join('ecom_products', 'ecom_products.id', '=', 'ecom_order_details.product_id')
                            ->select(
                                'ecom_products.product_name',
                                'ecom_products.product_page_main_image',
                                'ecom_order_details.unit_price',
                                'ecom_order_details.quantity',
                                'ecom_order_details.grand_total'
                            )
                            ->get();
    }

    public function render()
    {
        return view('livewire.my-order');
    }
}
