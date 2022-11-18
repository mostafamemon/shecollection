<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Product\ProductList;
use App\Http\Livewire\Product\ProductSingle;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',Index::class);
Route::get('/product-list',ProductList::class);
Route::get('/product',ProductSingle::class);
Route::get('/login',Login::class);
Route::get('/register',Register::class);