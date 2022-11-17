<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home\Index;

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',Index::class);