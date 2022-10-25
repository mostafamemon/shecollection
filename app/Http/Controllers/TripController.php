<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntercityTrip;
use App\Models\IntercityVehicle;
use DateTime;
use DateInterval;
use DatePeriod;
use DB;

class TripController extends Controller
{
    public function trip_creation($company_id) {
        $trips = [];
        $vehicles   = IntercityVehicle::where('company_id',$company_id)->where('iot_device_id','DCF')->get()->toArray();
        
        $begin      = new DateTime('2021-06-01 05:00:00');
        $end        = new DateTime('2021-12-30 00:00:00');
        $interval   = DateInterval::createFromDateString('1 day');
        $period     = new DatePeriod($begin, $interval, $end);

        $sl = 0;
        foreach ($period as $date) {
            $sl = $sl + 1;
            $month  = $date->format("m");
            if($month == 6) { $per_day_trip = 6; }
            else if($month == 7) { $per_day_trip = 12; }
            else if($month == 8) { $per_day_trip = 20; }
            else if($month == 9) { $per_day_trip = 30; }
            else if($month == 10) { $per_day_trip = 37; }
            else if($month == 11) { $per_day_trip = 44; }
            else if($month == 12) { $per_day_trip = 59; }

            if($sl % 2 == 0){
                if($company_id == 1) { $direction = "DOWN"; $route_id  = 2; }
                if($company_id == 1) { $direction = "DOWN"; $route_id  = 40; }
                if($company_id == 1) { $direction = "DOWN"; $route_id  = 88; }
            } else {
                if($company_id == 1) { $direction = "UP"; $route_id  = 1; }
                if($company_id == 1) { $direction = "UP"; $route_id  = 39; }
                if($company_id == 1) { $direction = "UP"; $route_id  = 82; }
            }

            $coaches        = array_slice($vehicles, 0, $per_day_trip); 
            $trip_datetime  = "";

            foreach($coaches as $coach) {
                $random_time    = rand(10,60);
                $formatted_date = $date->format("Y-m-d H:i:s"); 
                if($trip_datetime == "") { $trip_datetime = date('Y-m-d H:i:s', strtotime($formatted_date. ' +15 minutes')); }
                else { $trip_datetime = date('Y-m-d H:i:s', strtotime($trip_datetime. ' +15 minutes')); }
                $created_updated_at = date('Y-m-d H:i:s', strtotime($trip_datetime. ' -'.$random_time.' minutes'));
                
                $trip = [
                    'company_id'            => $company_id,
                    'admin_id'              => NULL,
                    'vehicle_id'            => $coach['id'],
                    'route_id'              => $route_id,
                    'seat_plan_id'          => $coach['seat_plan_id'],
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
        }
        return response()->json(count($trips));
        $chunks = array_chunk($trips, 500);
        foreach ($chunks as $chunk){
	        DB::table('intercity_trips')->insertOrIgnore($chunk);
        }
    }
}
