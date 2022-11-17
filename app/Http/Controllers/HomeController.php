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
        $search_bar_categories  = EcomCategory::select('id','category_name')->where('show_in_search_bar',1)->limit(6)->get();
        
        $home_page_ctg_1   = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(0)->limit(1)->first(); 
        $home_page_ctg_2   = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(1)->limit(1)->first(); 
        $home_page_ctg_3   = EcomCategory::select('id','category_name','category_banner')->where('show_in_home_page',1)->offset(2)->limit(1)->first(); 

        $home_page_ctg_1_active_type = "";
        $home_page_ctg_2_active_type = "";
        $home_page_ctg_3_active_type = "";

        $home_page_ctg_1_active_sub = "";
        $home_page_ctg_2_active_sub = "";
        $home_page_ctg_3_active_sub = "";

        $home_page_ctg_1_products = EcomProduct::where('category_id',$home_page_ctg_1->id)->limit(10)->get();

        return view('home',compact(
            'backend_url',
            'categories',
            'search_bar_categories',
            'hot_products',

            'home_page_ctg_1',
            'home_page_ctg_2',
            'home_page_ctg_3',
            'home_page_ctg_1_active_type',
            'home_page_ctg_2_active_type',
            'home_page_ctg_3_active_type',
            'home_page_ctg_1_active_sub',
            'home_page_ctg_2_active_sub',
            'home_page_ctg_3_active_sub',
            'home_page_ctg_1_products'
        ));
    }
}
