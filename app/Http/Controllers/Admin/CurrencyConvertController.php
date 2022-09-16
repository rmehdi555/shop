<?php

namespace App\Http\Controllers\Admin;

use App\CurrencyConvert;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiteDetailsRequest;
use App\Providers\MyProvider;
use App\SiteDetails;
use Illuminate\Http\Request;

class CurrencyConvertController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID = $request->SID;
        $items = CurrencyConvert::latest()->get();
        return view('admin.currency-convert.index', compact('items', 'SID'));
    }

    public function edit($item)
    {
        $item = CurrencyConvert::find($item);
        return view('admin.currency-convert.edit', compact('item'));
    }

    public function update(Request $request, $item)
    {
        $inputs = $request->all();
        $item = CurrencyConvert::find($item);
        $item->update(
            [
                'rate' => $inputs['rate'],
                'status' => $inputs['status']
            ]
        );
        return redirect(route('currencyConvert.index', ['SID' => '904']));
    }
}
