<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Noor;
use App\OnlinePayment;
use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SoapClient;


/*
 * 1- جدید
 * 2- ارسال برای پرداخت
 * 3-کنسل شدن توسط کاربر
 * 4-خطای وریفای و بازگشت تا 72 ساعت
 * 5- تایید نهایی
 */

class OnlinePaymentController extends Controller
{

    public function payMeliCallbackNoor(Request $request)
    {

        if (!isset($request->token) or empty($request->token)) {
            alert()->error(__('web/messages.error_payment_cancel_by_user'));
            return view('web.pages.noor-level-1');
        }
        $key = config('app.bankMeli.Key');
        $OrderId = $request->OrderId;
        $Token = $request->token;
        $ResCode = $request->ResCode;
        $onlinePayment = OnlinePayment::where('Token', '=', $Token)->first();
        if (isset($onlinePayment->id)) {
            if ($ResCode == 0) {
                $verifyData = array('Token' => $Token, 'SignData' => $this->encrypt_pkcs7($Token, $key));
                $str_data = json_encode($verifyData);
                $res = $this->CallAPI('https://sadad.shaparak.ir/vpg/api/v0/Advice/Verify', $str_data);
                $arrres = json_decode($res);
            } else {
                alert()->error(__('web/messages.error_payment_cancel_by_user'));
                return view('web.pages.noor-level-1');
            }
            if ($arrres->ResCode != -1 && $arrres->ResCode == 0) {
                $onlinePayment->update([
                    'RetrivalRefNo' => $arrres->RetrivalRefNo,
                    'SystemTraceNo' => $arrres->SystemTraceNo,
                    'status' => '5',
                ]);
                $noor = Noor::find($onlinePayment->user_code);
                $noor->update([
                    'status' => '4',
                ]);
                $this->send_sms_register_noor($noor->mobile, __('web/public.sex_sms_' . $noor->sex) . ' ' . $noor->name . ' ' . $noor->family);
                alert()->success(__('web/messages.success_payment'), __('web/messages.success'));
                return view('web.pages.noor-level-2-type-all', compact('noor'));

            } else
                $onlinePayment->update([
                    'status' => '4',
                ]);
            alert()->error(__('web/messages.error_payment_72'));
            return view('web.pages.noor-level-1');
        } else {
            //رکورد وجود ندارد
            alert()->error(__('web/messages.not_exist'));
            return view('web.pages.noor-level-1');

        }

    }


    public function payIrandargahCallback(Request $request)
    {

        if (!array_key_exists('code', $_POST)) {
            alert()->error(__('web/messages.error_payment_cancel_by_user'));
            return redirect()->route('web.home');
        }

        $merchantCode = '6908c3cf-eb85-4a04-9538-1f0618c2753b';

        if ($_POST['code'] == 100) {
            $data = [
                'merchantID' => $merchantCode,
                'authority' => $request->authority, // you can set this variable by: $_POST['authority'],
                'amount' => $request->amount, // you can set this variable by: intval($_POST['amount']),
                'orderId' => $request->orderId, // you can set this variable by: $_POST['orderId'],
            ];
            $onlinePayment = OnlinePayment::where('authority', '=', $request->authority)->first();
            if (!isset($onlinePayment->id)) {
                alert()->error(__('web/messages.error_payment_cancel_by_user'));
                return redirect()->route('web.home');
            }

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://dargaah.com/verification");
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
            if ($result->status == 100) {
                $onlinePayment->status = 5;
                $onlinePayment->refId = $result->refId;
                $onlinePayment->extraDetail = $request->cardNumber;
                $onlinePayment->save();
                $payment = Payment::find($onlinePayment->payment_id);
                if (isset($payment->id)) {
                    $payment->status = 5;
                    $payment->save();
                }

            } else {
                $onlinePayment->status = 4;
                $onlinePayment->refId = $result->refId;
                $onlinePayment->extraDetail = $request->cardNumber;
                $onlinePayment->save();

            }

            return view('web.pages.result-pay-online', compact('result'));
        } else {
            alert()->error($_POST['message']);
            return redirect()->route('web.home');
        }
    }

}
