<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home;

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',Home::class);