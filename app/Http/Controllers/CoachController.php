<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function coach_creation($company_id,$total_coach)
    {
        if($company_id == 1) {
            $init_value             = 622005;  
            $init_bracket_value     = 9199; 
            $start_date_time        = "2021-05-01 09:00:00";
            for($i = 1; $i <= $total_coach; $i++) {
                $new_init_value     = $init_value + $i;
                $new_bracket_value  = $init_bracket_value + $i;
	            $random_time        = rand(10,60);
	            $created_updated_at = date('Y-m-d H:i:s', strtotime($start_date_time. ' +'.$random_time.' minutes'));

                $vehicle                        = new IntercityVehicle();
                $vehicle->company_id            = $company_id;
                $vehicle->coach_no              = "0".$new_init_value." (".$new_bracket_value.")";
                $vehicle->registration_number   = "DHAKA METRO-BA-".rand(10,99)."-".rand(1000,9999); 
                $vehicle->seat_plan_id          = 1;
                $vehicle->seat_capacity         = 45;
                $vehicle->coach_time            = NULL;
                $vehicle->coach_route           = NULL;
                $vehicle->iot_device_id         = "DCF";
                $vehicle->iot_device_status     = NULL;
                $vehicle->vehicle_ignition      = "";
                $vehicle->current_latitude      = "";
                $vehicle->current_longitude     = "";
                $vehicle->speed                 = "";
                $vehicle->last_stoppage_id      = NULL;
                $vehicle->status                = 0;
                $vehicle->created_at            = $created_updated_at;
                $vehicle->updated_at            = $created_updated_at;
                $vehicle->save();
            }
        }

        if($company_id == 11) {
            $init_value             = 101;
            $start_date_time        = "2021-05-01 09:00:00";
            for($i = 1; $i <= $total_coach; $i++) {
                $new_init_value     = $init_value + $i;
	            $random_time        = rand(10,60);
	            $created_updated_at = date('Y-m-d H:i:s', strtotime($start_date_time. ' +'.$random_time.' minutes'));

                $vehicle                        = new IntercityVehicle();
                $vehicle->company_id            = $company_id;
                $vehicle->coach_no              = "Mamun-".$new_init_value;
                $vehicle->registration_number   = "Mamun-".$new_init_value;
                $vehicle->seat_plan_id          = 57;
                $vehicle->seat_capacity         = 45;
                $vehicle->coach_time            = NULL;
                $vehicle->coach_route           = NULL;
                $vehicle->iot_device_id         = "DCF";
                $vehicle->iot_device_status     = NULL;
                $vehicle->vehicle_ignition      = "";
                $vehicle->current_latitude      = "";
                $vehicle->current_longitude     = "";
                $vehicle->speed                 = "";
                $vehicle->last_stoppage_id      = NULL;
                $vehicle->status                = 0;
                $vehicle->created_at            = $created_updated_at;
                $vehicle->updated_at            = $created_updated_at;
                $vehicle->save();
            }
        }

        if($company_id == 17) {
            $init_value             = 902;
            $start_date_time        = "2021-05-01 09:00:00";
            for($i = 1; $i <= $total_coach; $i++) {
                $new_init_value     = $init_value + $i;
	            $random_time        = rand(10,60);
	            $created_updated_at = date('Y-m-d H:i:s', strtotime($start_date_time. ' +'.$random_time.' minutes'));

                $vehicle                        = new IntercityVehicle();
                $vehicle->company_id            = $company_id;
                $vehicle->coach_no              = "Coach no ".$new_init_value;
                $vehicle->registration_number   = "Coach no ".$new_init_value;
                $vehicle->seat_plan_id          = 58;
                $vehicle->seat_capacity         = 45;
                $vehicle->coach_time            = NULL;
                $vehicle->coach_route           = NULL;
                $vehicle->iot_device_id         = "DCF";
                $vehicle->iot_device_status     = NULL;
                $vehicle->vehicle_ignition      = "";
                $vehicle->current_latitude      = "";
                $vehicle->current_longitude     = "";
                $vehicle->speed                 = "";
                $vehicle->last_stoppage_id      = NULL;
                $vehicle->status                = 0;
                $vehicle->created_at            = $created_updated_at;
                $vehicle->updated_at            = $created_updated_at;
                $vehicle->save();
            }
        }
    }
}
