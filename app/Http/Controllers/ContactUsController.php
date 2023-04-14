<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\WebPages;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageDetails = WebPages::find(3);
        if (!isset($pageDetails) OR empty($pageDetails))
            return redirect()->route('web.404');
        return view('web.pages.contact-us',compact('pageDetails'));
    }
    public function insert(ContactUsRequest $request)
    {
        $result=ContactUs::create([
            'name' => $request['name'],
            'family' => $request['family'],
            'email' => strtolower($request['email']),
            'phone' => \App\Providers\MyProvider::convert_phone_number($request['phone']),
            'body' => $request['body'],
        ]);
        alert()->success(__('web/messages.insert_is_true'),__('web/messages.submit_is_true'));
        return redirect(route('web.contact.us.index'));
    }
}
