<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcomCategory;

class HomeController extends Controller
{
    public function index()
    {
        $categories = EcomCategory::select('id','category_name')->orderBy('category_name','asc')->get();
        $search_bar_categories = EcomCategory::select('id','category_name')->where('show_in_search_bar',1)->limit(6)->get();
        return view('home',compact('categories','search_bar_categories'));
    }
}
