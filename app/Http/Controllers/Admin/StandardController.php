<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StandardsRequest;
use App\ProductCategories;
use App\Providers\MyProvider;
use App\Standards;
use Illuminate\Http\Request;

class StandardController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID=$request->SID;
        $standards=Standards::all();
        return view('admin.standard.index',compact('standards','SID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $SID=$request->SID;
        $productCategories = ProductCategories::all();
        return view('admin.standard.create',compact('SID','productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StandardsRequest $request)
    {
        $inputs=$request->all();
        $inputs['images'] = $this->uploadImages($request->file('images'),'standard',["920-380" , "600" , "920"]);
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');
        auth()->user()->standard()->create($inputs);

        return redirect(route('standard.index',['SID' => '206']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Standards  $standard
     * @return \Illuminate\Http\Response
     */
    public function show($standard)
    {
        $standard=Standards::find($standard);
        return view('admin.standard.show',compact('standard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Standards  $standard
     * @return \Illuminate\Http\Response
     */
    public function edit($standard)
    {
        $standard=Standards::find($standard);
        $productCategories = ProductCategories::all();
        return view('admin.standard.edit',compact('standard','productCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Standards  $standard
     * @return \Illuminate\Http\Response
     */
    public function update(StandardsRequest $request, $standard)
    {
        $file = $request->file('images');
        $inputs = $request->all();
        $standard=Standards::find($standard);

        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'),'standard',["920-380" , "600" , "920"]);
        } else {
            $inputs['images'] = $standard->images;
        }
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');

        $standard->update($inputs);

        return redirect(route('standard.index',['SID' => '206']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Standards  $standard
     * @return \Illuminate\Http\Response
     */
    public function destroy($standard)
    {
        Standards::find($standard)->delete();
        return redirect(route('standard.index',['SID' => '206']));
    }



}
