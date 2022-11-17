<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Product\ProductList;

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',Index::class);
Route::get('/product-list',ProductList::class);