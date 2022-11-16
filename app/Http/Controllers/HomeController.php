<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcomCategory;
use App\Models\EcomProduct;

class HomeController extends Controller
{
    public function index()
    {
        $backend_url        = config('app.backend_url');
        $hot_products       = EcomProduct::select('id','product_name','hot_product_image')->where('hot_product',1)->limit(8)->get();
        $categories         = EcomCategory::select('id','category_name')->orderBy('category_name','asc')->get();
        $search_bar_categories = EcomCategory::select('id','category_name')->where('show_in_search_bar',1)->limit(6)->get();
        return view('home',compact('backend_url','categories','search_bar_categories','hot_products'));
    }
}
