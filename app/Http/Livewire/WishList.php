<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\EcomCart;
use App\Models\EcomWishList;
use Auth;

class WishList extends Component
{
    public $backend_url = "";
    public $wishlist    = [];

    public function mount()
    {
        $this->backend_url  = config('app.backend_url');
        if(Auth::user() && Auth::user()->id) {
            $this->wishlist = EcomWishList::where('user_id',Auth::user()->id)
                        ->join('ecom_products', 'ecom_products.id', '=', 'ecom_wish_lists.product_id')
                        ->select(
                            'ecom_wish_lists.id as wish_list_id',
                            'ecom_wish_lists.quantity',
                            'ecom_products.id as product_id',
                            'ecom_products.product_name',
                            'ecom_products.product_page_main_image'
                        )
                        ->get();
        } else {
            return redirect()->to('/login');
        }
    }

    public function removeItem($wish_list_id)
    {
        EcomWishList::where('id',$wish_list_id)->delete();
        return redirect()->to('/wishlist');
    }

    public function add_to_cart($wish_list_id)
    {
        $wishlist           = EcomWishList::where('id',$wish_list_id)->first();
        $cart               = new EcomCart();
        $cart->user_id      = $wishlist->user_id;
        $cart->product_id   = $wishlist->product_id;
        $cart->quantity     = $wishlist->quantity;
        $cart->save();
        EcomWishList::where('id',$wish_list_id)->delete();
        
        return redirect()->to('/wishlist');
    }

    public function render()
    {
        return view('livewire.wish-list');
    }
}
