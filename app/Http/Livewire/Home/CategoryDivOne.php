<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\EcomCategory;

class CategoryDivOne extends Component
{
    public $home_page_ctg_1 = "";
    public $home_page_ctg_1_active_type = "";
    public $backend_url = "";

    public function mount()
    {
        $this->backend_url       = config('app.backend_url');
        $this->home_page_ctg_1   = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(0)->limit(1)->first(); 
    }

    public function render()
    {
        return view('livewire.home.category-div-one');
    }
}
