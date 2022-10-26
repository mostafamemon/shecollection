<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntercityTrip;
use App\Models\IntercityVehicle;
use App\Models\IntercityTicketBooking;
use DB;

class TicketController extends Controller
{
    public function ticket_creation($company_id,$month) 
    {
        $tickets    = [];
        $trip_ids   = [];
        $trips = IntercityTrip::where('company_id',$company_id)->whereMonth('trip_datetime', '=', $month)->where('local_registration_number','DCF')->limit(100)->get();
        $sl = 0;
        foreach($trips as $trip) {
            list($boarding_point,$dropping_point,$boarding_place,$fare_per_ticket) = explode("_",$this->get_boarding_dropping_info($trip->route_id));
            for($i = 1; $i <= 45; $i++) {
                $sl = $sl + 1;
                $counterman = $this->get_counterman($company_id);
                $random_time    = rand(10,300);
                $created_updated_at = date('Y-m-d H:i:s', strtotime($trip->trip_datetime. ' -'.$random_time.' minutes'));
                $ticket = [
                    'company_id'            => $company_id,
                    'trip_id'               => $trip->id,
                    'pnr_code'              => substr(strtoupper(sha1(time())), 0, 15),
                    'admin_id'              => $counterman['counterman_id'],
                    'passenger_name'        => "Mr./Mrs.",
                    'passenger_mobile'      => "+880",
                    'passenger_gender'      => "Male",
                    'passenger_age'         => NULL,
                    'passenger_nid'         => NULL,
                    'passenger_passport'    => "DCF",
                    'passenger_address'     => NULL,
                    'passenger_nationality' => "BANGLADESHI",
                    'boarding_point'        => $boarding_point,
                    'dropping_point'        => $dropping_point,
                    'boarding_place'        => $boarding_place,
                    'goods_weight'          => 0,
                    'goods_discount'        => 0,
                    'gross_pay'             => 0,
                    'seat_no'               => $this->get_seat_no($sl),
                    'seat_count'            => 1,
                    'fare_per_ticket'       => $fare_per_ticket,
                    'net_payable'           => $fare_per_ticket,
                    'discount'              => 0,
                    'total_due'             => 0,
                    'total_paid'            => $fare_per_ticket,
                    'total_refund'          => $fare_per_ticket,
                    'issued_by'             => $counterman['counterman_name'],
                    'referenced_by'         => NULL,
                    'status'                => 1,
                    'cancelled_by'          => NULL,
                    'print_count'           => 1,
                    'created_at'            => $created_updated_at,
                    'updated_at'            => $created_updated_at
                ];
                array_push($tickets,$ticket);
            }
            array_push($trip_ids,$trip->id);
        }
        IntercityTrip::whereIn('id', $trip_ids)->update(['local_registration_number' => "DCFD"]);
        
        $chunks = array_chunk($tickets, 500);
        foreach ($chunks as $chunk){
	        DB::table('intercity_ticket_bookings')->insertOrIgnore($chunk);
        }

        $response = [
            'total_trip'    => count($trips),
            'total_ticket'  => count($tickets)
        ];
        return response()->json($response);
    }



    public function get_counterman($company_id)
    {
        $vip_countermans = [
            [
                "counterman_id"     => 3,
                "counterman_name"   => "মোঃ জহিরুল হক খান"
            ],
            [
                "counterman_id"     => 4,
                "counterman_name"   => "Md Samim Hawlader"
            ],
            [
                "counterman_id"     => 5,
                "counterman_name"   => "ঢাকা কন্ট্রোল"
            ],
            [
                "counterman_id"     => 6,
                "counterman_name"   => "মোঃ হাসান"
            ],
            [
                "counterman_id"     => 7,
                "counterman_name"   => "মোঃ সোহেল"
            ]
        ];
        $mamun_counterman = [
            [
                "counterman_id"     => 361,
                "counterman_name"   => "Mamun Admin"
            ],
            [
                "counterman_id"     => 407,
                "counterman_name"   => "Asad"
            ]
        ];
        $time_counterman = [
            [
                "counterman_id"     => 615,
                "counterman_name"   => "Sayed"
            ],
            [
                "counterman_id"     => 624,
                "counterman_name"   => "Rubel"
            ],
            [
                "counterman_id"     => 627,
                "counterman_name"   => "Shanto (ctg rd 2)"
            ],
            [
                "counterman_id"     => 628,
                "counterman_name"   => "Nasir (admin)"
            ],
            [
                "counterman_id"     => 629,
                "counterman_name"   => "Shakil"
            ]
        ];
        if($company_id == 1 || $company_id == 17) {
            $random_counterman = rand(0,4);
        } else {
            $random_counterman = rand(0,1);
        }
        
        if($company_id == 1) {
            return $vip_countermans[$random_counterman];
        } else if($company_id == 11) {
            return $mamun_counterman[$random_counterman];
        } else if($company_id == 17) {
            return $time_counterman[$random_counterman];
        }
    }

    public function get_boarding_dropping_info($route_id)
    {
        if($route_id == 1) {
            $boarding_point = 4;
            $dropping_point = 20;
            $boarding_place = "KACHPUR";
            $fare_per_ticket = 550;

        } else if($route_id == 2) {
            $boarding_point = 23;
            $dropping_point = 4;
            $boarding_place = "PONCHAGARH";
            $fare_per_ticket = 550;

        } else if($route_id == 39) {
            $boarding_point = 279;
            $dropping_point = 287;
            $boarding_place = "Ashuganj ( Ujan Vati)";
            $fare_per_ticket = 500;

        } else if($route_id == 40) {
            $boarding_point = 287;
            $dropping_point = 288;
            $boarding_place = "Sunamganj ";
            $fare_per_ticket = 500;

        } else if($route_id == 82) {
            $boarding_point = 436;
            $dropping_point = 455;
            $boarding_place = "Saidabad";
            $fare_per_ticket = 1000;

        } else if($route_id == 88) {
            $boarding_point = 455;
            $dropping_point = 448;
            $boarding_place = "Coxsbazar";
            $fare_per_ticket = 1000;
        }

        return $boarding_point."_".$dropping_point."_".$boarding_place."_".$fare_per_ticket;
    }

    public function get_seat_no($sl)
    {
        if($sl == 1) { return "A1"; }
        else if($sl == 2) { return "A2"; }
        else if($sl == 3) { return "A3"; }
        else if($sl == 4) { return "A4"; }

        else if($sl == 5) { return "B1"; }
        else if($sl == 6) { return "B2"; }
        else if($sl == 7) { return "B3"; }
        else if($sl == 8) { return "B4"; }
        
        else if($sl == 9) { return "C1"; }
        else if($sl == 10) { return "C2"; }
        else if($sl == 11) { return "C3"; }
        else if($sl == 12) { return "C4"; }
        
        else if($sl == 13) { return "D1"; }
        else if($sl == 14) { return "D2"; }
        else if($sl == 15) { return "D3"; }
        else if($sl == 16) { return "D4"; }
        
        else if($sl == 17) { return "E1"; }
        else if($sl == 18) { return "E2"; }
        else if($sl == 19) { return "E3"; }
        else if($sl == 20) { return "E4"; }

        else if($sl == 21) { return "F1"; }
        else if($sl == 22) { return "F2"; }
        else if($sl == 23) { return "F3"; }
        else if($sl == 24) { return "F4"; }

        else if($sl == 25) { return "G1"; }
        else if($sl == 26) { return "G2"; }
        else if($sl == 27) { return "G3"; }
        else if($sl == 28) { return "G4"; }

        else if($sl == 29) { return "H1"; }
        else if($sl == 30) { return "H2"; }
        else if($sl == 31) { return "H3"; }
        else if($sl == 32) { return "H4"; }

        else if($sl == 33) { return "I1"; }
        else if($sl == 34) { return "I2"; }
        else if($sl == 35) { return "I3"; }
        else if($sl == 36) { return "I4"; }

        else if($sl == 37) { return "J1"; }
        else if($sl == 38) { return "J2"; }
        else if($sl == 39) { return "J3"; }
        else if($sl == 40) { return "J4"; }

        else if($sl == 41) { return "K1"; }
        else if($sl == 42) { return "K2"; }
        else if($sl == 43) { return "K3"; }
        else if($sl == 44) { return "K4"; }
        else if($sl == 45) { return "K5"; }
    }
}
