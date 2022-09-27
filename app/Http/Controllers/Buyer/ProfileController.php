<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileBuyerSaveRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function save(ProfileBuyerSaveRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->family = $request->family;
        $user->email = strtolower($request->email);
        $user->save();
        return redirect()->route('buyer.panel');
    }
}
