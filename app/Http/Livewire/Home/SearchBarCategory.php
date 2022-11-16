<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;

class SearchBarCategory extends Component
{
    public $backend_url    = "";
    public $categories     = "";
    public $search_bar_categories   = "";

    public function mount() 
    {
        $this->search_bar_categories    = EcomCategory::select('id','category_name')->where('show_in_search_bar',1)->limit(6)->get();
    }
    
    public function render()
    {
        return view('livewire.home.search-bar-category');
    }
}
