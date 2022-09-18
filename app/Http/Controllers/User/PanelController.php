<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->level == 'buyer') {
            return redirect()->route('buyer.panel');
        } elseif (Auth::user()->level == 'admin') {
            return redirect()->route('admin.panel');
        } else {
            return redirect()->route('web.home');
        }


    }
}
