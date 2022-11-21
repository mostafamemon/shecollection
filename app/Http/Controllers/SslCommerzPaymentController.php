<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\EcomOrder;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index($order_id)
    {
        $order = EcomOrder::where('id',$order_id)->first();
        $post_data = array();
        $post_data['total_amount'] = $order->grand_total; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $order->transaction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->name;
        if($order->email != "") {
            $post_data['cus_email'] = $order->email;
        } else {
            $post_data['cus_email'] = 'noreply@shecollectionbd.com';
        }
        
        $post_data['cus_add1'] = $order->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $order->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = $order->delivery_location;
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "SheCollection";
        $post_data['product_category'] = "Ecommerce";
        $post_data['product_profile'] = "general";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "";
        $post_data['value_b'] = "";
        $post_data['value_c'] = "";
        $post_data['value_d'] = "";

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();
        $order_detials = DB::table('ecom_orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'grand_total')->first();

        if ($order_detials->status == 'PENDING') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, 50, $currency);
            if ($validation) {
                return redirect()->to('/success-page');
            } else {
                return redirect()->to('/fail-page');
            }
        } else if ($order_detials->status == 'PAID') {
            echo "Transaction is successfully Completed";
        } else {
            echo "Invalid Transaction";
        }
    }

    public function fail(Request $request)
    {
        return redirect()->to('fail-page');
    }

    public function cancel(Request $request)
    {
        return redirect()->to('fail-page');
    }

    // NOT USING CURRENTLY
    public function ipn(Request $request)
    {
        if ($request->input('tran_id'))
        {
            $tran_id = $request->input('tran_id');
            $order_details = DB::table('ecom_orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'grand_total')->first();

            if ($order_details->status == 'PENDING') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->grand_total, 'BDT');
                if ($validation == TRUE) {
                    $update_product = DB::table('ecom_orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'PAID']);
                    return redirect()->to('/success-page');
                }
            } else if ($order_details->status == 'PAID') {
                echo "Transaction is already Completed";
            } else {
                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

}
