<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\EcomCart;
use App\Models\EcomWishList;
use Auth;

class WishAndCartCounter extends Component
{
    public $carts       = 0;
    public $wishlist    = 0;

    protected $listeners = ['updateCart' => 'update_cart', 'updateWishList' => 'update_wish_list'];

    public function mount()
    {
        if(Auth::user() && Auth::user()->id) {
            $this->carts        = EcomCart::where('user_id',Auth::user()->id)->count();
            $this->wishlist     = EcomWishList::where('user_id',Auth::user()->id)->count();
        } else {
            $this->carts    = 0;
            $this->wishlist = 0;
        }
    }

    public function update_cart()
    {
        if(Auth::user() && Auth::user()->id) {
            $this->carts        = EcomCart::where('user_id',Auth::user()->id)->count();
        } else {
            $this->carts    = 0;
        }
    }

    public function update_wish_list()
    {
        if(Auth::user() && Auth::user()->id) {
            $this->wishlist     = EcomWishList::where('user_id',Auth::user()->id)->count();
        } else {
            $this->wishlist = 0;
        }
    }

    public function render()
    {
        return view('livewire.layouts.wish-and-cart-counter');
    }
}
