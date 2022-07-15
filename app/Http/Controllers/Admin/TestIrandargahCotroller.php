<?php

namespace App\Http\Controllers\Admin;

use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use SoapClient;

class TestIrandargahCotroller extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID = 1001;
        return view('admin.test.irandargah-index', compact('SID'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
        ]);
        $merchantCode='6908c3cf-eb85-4a04-9538-1f0618c2753b';
        $amount = $request->amount;
        $callbackURL = route('web.payment.online.irandargah.callback');
        $orderId = time();
        $cardNumber = '6037997267592864';
        $mobile = '09185507245';
        $desription = 'test';
        $data = [
            'merchantID' => $merchantCode,
            'amount' => (int) $amount,
            'callbackURL' => $callbackURL,
            'orderId' => (string) $orderId,
            'cardNumber' => $cardNumber,
            'mobile' => $mobile,
            'description' => $desription
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://dargaah.com/payment");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
# if you get SSL error (curl error 60) add 2 lines below
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
# end SSL error
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        curl_close($ch);
        $result = json_decode($response);
        if ($result->status == '200') {
            header("Location: https://dargaah.com/ird/startpay/" . $result->authority);
        } else {
            die('Error in connecting to gateway: ' . $result->message);
        }

    }


}
