<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

Route::get('/coach-creation/{company_id}/{total_coach}', [CoachController::class, 'coach_creation']);
// http://localhost:8000/coach-creation/1/57
// http://localhost:8000/coach-creation/11/57
// http://localhost:8000/coach-creation/17/57

Route::get('/trip-creation/{company_id}', [TripController::class, 'trip_creation']);
// http://localhost:8000/trip-creation/1
// http://localhost:8000/trip-creation/11
// http://localhost:8000/trip-creation/17

Route::get('/ticket-creation/{company_id}/{month}', [TicketController::class, 'ticket_creation']);