<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntercityTrip;
use App\Models\IntercityVehicle;

class TicketController extends Controller
{
    if($month == 6) { $per_day_trip = 6; }
            else if($month == 7) { $per_day_trip = 12; }
            else if($month == 8) { $per_day_trip = 20; }
            else if($month == 9) { $per_day_trip = 30; }
            else if($month == 10) { $per_day_trip = 37; }
            else if($month == 11) { $per_day_trip = 44; }
            else if($month == 12) { $per_day_trip = 59; }
            
            $trip_created = 0;

            foreach($vehicles as $vehicle) {

               
            }
            
    $trip_date          = date("Y-m-d H:i:s", strtotime($start_date. '+1 day'));
    $month              = date('m', strtotime($trip_date));
    if($month == 6) { $per_day_trip = 6; }
    else if($month == 7) { $per_day_trip = 12; }
    else if($month == 8) { $per_day_trip = 20; }
    else if($month == 9) { $per_day_trip = 30; }
    else if($month == 10) { $per_day_trip = 37; }
    else if($month == 11) { $per_day_trip = 44; }
    else if($month == 12) { $per_day_trip = 59; }

    if($trip_created > $per_day_trip) { break; }

    if($trip_created % 2 == 0){
        if($company_id == 1) { $direction = "DOWN"; $route_id  = 2; }
        if($company_id == 1) { $direction = "DOWN"; $route_id  = 40; }
        if($company_id == 1) { $direction = "DOWN"; $route_id  = 88; }
    } else {
        if($company_id == 1) { $direction = "UP"; $route_id  = 1; }
        if($company_id == 1) { $direction = "UP"; $route_id  = 39; }
        if($company_id == 1) { $direction = "UP"; $route_id  = 82; }
    }

    $random_time   = rand(10,60);
    $trip_datetime = date('Y-m-d H:i:s', strtotime($start_date. ' +15 minutes'));
    $created_updated_at = date('Y-m-d H:i:s', strtotime($trip_datetime. ' -'.$random_time.' minutes'));
    
    $trip = [
        'company_id'            => $company_id,
        'admin_id'              => NULL,
        'vehicle_id'            => $vehicle->id,
        'route_id'              => $route_id,
        'seat_plan_id'          => $vehicle->seat_plan_id,
        'trip_code'             => rand(1000, 9999),
        'direction'             => $direction,
        'trip_datetime'         => $trip_datetime,
        'driver_id'             => NULL,
        'supervisor_id'         => NULL,
        'ac_type'               => "NON-AC",
        'local_registration_number' => "DCF",
        'local_fare'            => NULL,
        'pass_from'             => NULL,
        'pass_by'               => NULL,
        'status'                => 1,
        'cancelled_by'          => NULL,
        'booked_seats'          => NULL,
        'cancelled_by'          => NULL,
        'created_at'            => $created_updated_at,
        'updated_at'            => $created_updated_at
    ];

    array_push($trips,$trip);
}
