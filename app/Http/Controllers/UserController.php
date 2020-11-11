<?php

namespace App\Http\Controllers;

use App\ActivationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function activationAccountByEmail($token)
    {
        $activationCode=ActivationCode::whereCode($token)->first();
        if(! $activationCode)
        {
            alert()->error(__('web/messages.not_exist_activation_code'),__('web/messages.alert'));
            return redirect('/');
        }
        if( $activationCode->expire < Carbon::now())
        {
            alert()->error(__('web/messages.expire_activation_code'),__('web/messages.alert'));
            return redirect('/');
        }
        if( $activationCode->used == true)
        {
            alert()->error(__('web/messages.used_activation_code'),__('web/messages.alert'));
            return redirect('/');
        }
        $activationCode->user->update([
            'active'=>1
        ]);
        $activationCode->update([
            'used'=>true
        ]);
        auth()->loginUsingId($activationCode->user->id);
        alert()->success(__('web/messages.active_your_panel'),__('web/messages.success'));
        return redirect('/');
    }
}
