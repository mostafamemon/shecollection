<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\EcomCart;
use App\Models\EcomOrder;
use App\Models\EcomOrderDetail;
use Auth;

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

        $sslc   = new SslCommerzNotification();
        $order  = EcomOrder::where('transaction_id',$tran_id)->first();

        if ($order->status == 'PENDING') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);
            if ($validation) {
                $order->status = "PAID";
                $order->save();

                EcomCart::where('user_id',Auth::user()->id)->delete();
                $this->send_sms($order->id,$order->phone);
                return redirect()->to('/success-page');
            } else {
                EcomOrderDetail::where('order_id',$order->id)->delete();
                EcomOrder::where('id',$order->id)->delete();
                return redirect()->to('/fail-page');
            }
        } else if ($order->status == 'PAID') {
            echo "Transaction is successfully Completed";
        } else {
            echo "Invalid Transaction";
        }
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $order   = EcomOrder::where('transaction_id',$tran_id)->first();
        EcomOrderDetail::where('order_id',$order->id)->delete();
        EcomOrder::where('id',$order->id)->delete();
        return redirect()->to('/fail-page');
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $order   = EcomOrder::where('transaction_id',$tran_id)->first();
        EcomOrderDetail::where('order_id',$order->id)->delete();
        EcomOrder::where('id',$order->id)->delete();
        return redirect()->to('/fail-page');
    }

    public function ipn(Request $request)
    {
        // CURRENTLY NOT USING AS SAME WORK ORDER VALIDATION ON SUCSESS
    }

    public function send_sms($order_id,$phone)
    {
        $text = "Your order no. ".str_pad($order_id, 8, '0', STR_PAD_LEFT)." has been received. Thanks for your purchase! She Collection";
        if(config('app.sms_service') == "ENABLE") {
            $sms_url    = config('app.sms_url');
            $phone      = "880".substr($phone, -10);
            $sms_url    = str_replace("<destination>", $phone, $sms_url);
            $sms_url    = str_replace("<message>", urlencode($text), $sms_url);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $sms_url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
        }
    }

}
