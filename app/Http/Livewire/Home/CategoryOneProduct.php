<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class CategoryOneProduct extends Component
{
    protected $listeners = ['some-event' => '$refresh'];
    public $products;
    public $backend_url = "";

    public function mount()
    {
        $this->backend_url       = config('app.backend_url');
    }

    public function render()
    {
        return view('livewire.home.category-one-product');
    }
}
