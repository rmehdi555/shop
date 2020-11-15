<?php

namespace App\Listeners\UserActivation;

use App\Events\UserActivation;
use App\Events\UserActivationSms;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class SendSmsNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UserActivation  $event
     * @return void
     */
    public function handle(UserActivationSms $event)
    {
//        $client = new Client([
//            'verify' => false
//        ]);
//        $url = config('app.smsPanelUrl');
//
//        $rcpt_nm = array($event->user->phone);
//        $param = array
//        (
//            'uname'=>config('app.smsPanelUser'),
//            'pass'=>config('app.smsPanelPass'),
//            'from'=>config('app.smsPanelFrom'),
//            'message'=>$event->activationCode,
//            'to'=>json_encode($rcpt_nm),
//            'op'=>'send'
//        );
//
//        $handler = curl_init($url);
//        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
//        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
//        $response2 = curl_exec($handler);
//
//        $response2 = json_decode($response2);
//        $res_code = $response2[0];
//        $res_data = $response2[1];

    }
}
