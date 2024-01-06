<?php

namespace App\Controllers;



class Landing extends BaseController
{
    public function landing()
    {

     // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = 'Mid-server-1BvPZNaT-5G94_yU4GcU-RBm';
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = true;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => rand(),
            'gross_amount' => 10,
        )
    );      

    $data=[
        'snapToken' => \Midtrans\Snap::getSnapToken($params)
    ];

    return view('landing',$data);
        
    }

}