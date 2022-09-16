<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiteDetailsRequest;
use App\Providers\MyProvider;
use App\SiteDetails;
use Illuminate\Http\Request;

class UsersListController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID = $request->SID;
        $items = User::latest()->get();
        return view('admin.users-list.index', compact('items', 'SID'));
    }

}
