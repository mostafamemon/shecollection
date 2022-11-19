<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home\Index;
use App\Http\Livewire\Product\ProductList;
use App\Http\Livewire\Product\ProductSingle;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Cart;
use App\Http\Livewire\WishList;
use App\Http\Livewire\SuccessPage;
use App\Http\Livewire\FailPage;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\PrivacyPolicy;
use App\Http\Livewire\TermsAndCondition;
use App\Http\Livewire\CancellationAndReturn;
use App\Http\Livewire\MyProfile;
use App\Http\Livewire\MyOrder;

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',Index::class);
Route::get('/product-list',ProductList::class);
Route::get('/product',ProductSingle::class);
Route::get('/login',Login::class);
Route::get('/register',Register::class);
Route::get('/cart',Cart::class);
Route::get('/success-page',SuccessPage::class);
Route::get('/fail-page',FailPage::class);
Route::get('/wishlist',WishList::class);
Route::get('/contact-us',ContactUs::class);
Route::get('/privacy-policy',PrivacyPolicy::class);
Route::get('/terms-and-condition',TermsAndCondition::class);
Route::get('/cancellation-and-return',CancellationAndReturn::class);
Route::get('/my-profile',MyProfile::class);
Route::get('/my-orders',MyOrder::class);