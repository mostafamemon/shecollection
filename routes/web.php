<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

Route::get('/coach-creation/{company_id}/{total_coach}', [CoachController::class, 'coach_creation']);
Route::get('/trip-creation/{company_id}', [TripController::class, 'trip_creation']);