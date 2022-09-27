<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\OnlinePayment;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $payments = Payment::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(20);
        return view('buyer.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->type = 'online';
        $payment->user_id = $request->user_id;
        $payment->status = 2;
        $payment->price = $request->price;
        $payment->description_user = $request->description_user ?? '';
        $payment->save();
        return redirect(route('buyer.payments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        $this->validate($request, [
            'payment_id' => 'required|exists:payments,id',
        ]);
        $payment = Payment::find($request->payment_id);
        $user = Auth::user();
        if ($payment->user_id != $user->id) {
            alert()->error(__('خطا رخ داده است مجدد تلاش کنید'), __('web/messages.alert'));
            return redirect()->route('buyer.payments.index');
        }
        $onllinePayment = new OnlinePayment();
        $onllinePayment->payment_id = $payment->id;
        $onllinePayment->price = $payment->price;
        $onllinePayment->user_id = $user->id;
        $onllinePayment->user_type = 'buyer';
        $onllinePayment->mobile = $user->phone;
        $onllinePayment->callbackURL = route('web.payment.online.irandargah.callback');
        $onllinePayment->order_id = time();


        $merchantCode = '6908c3cf-eb85-4a04-9538-1f0618c2753b';
        $desription = 'pay buyer user_id' . $user->id;
        $data = [
            'merchantID' => $merchantCode,
            'amount' => (int)$onllinePayment->price,
            'callbackURL' => $onllinePayment->callbackURL,
            'orderId' => (string)$onllinePayment->order_id,
//            'cardNumber' => $cardNumber,
            'mobile' => $onllinePayment->mobile,
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
            $onllinePayment->authority = $result->authority;
            $onllinePayment->save();
            header("Location: https://dargaah.com/ird/startpay/" . $result->authority);
        } else {
            alert()->error($result->message, __('web/messages.alert'));
            return redirect()->route('buyer.payments.index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
