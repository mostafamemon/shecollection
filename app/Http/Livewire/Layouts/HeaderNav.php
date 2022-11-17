<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\EcomCategory;

class HeaderNav extends Component
{
    public $categories = [];

    public function mount()
    {
        $this->categories = EcomCategory::select('id','category_name')->orderBy('category_name','asc')->get();
    }
    
    public function render()
    {
        return view('livewire.layouts.header-nav');
    }
}
