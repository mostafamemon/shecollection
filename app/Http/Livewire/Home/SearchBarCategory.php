<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;

class SearchBarCategory extends Component
{
    public $backend_url    = "";
    public $categories     = "";
    public $search_bar_categories   = "";
    public $search_text    = "";

    public function mount() 
    {
        $this->search_bar_categories    = EcomCategory::select('id','category_name')->where('show_in_search_bar',1)->limit(6)->get();
    }

    public function search_product()
    {
        if($this->search_text != "") {
            return redirect('/product-list?s='.$this->search_text);
        }
    }

    public function render()
    {
        return view('livewire.home.search-bar-category');
    }
}
