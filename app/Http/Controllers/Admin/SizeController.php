<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizesRequest;
use App\ProductCategories;
use App\Providers\MyProvider;
use App\Sizes;
use Illuminate\Http\Request;

class SizeController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID=$request->SID;
        $sizes=Sizes::all();
        return view('admin.size.index',compact('sizes','SID'));
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
        return view('admin.size.create',compact('SID','productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizesRequest $request)
    {
        $inputs=$request->all();
        $inputs['images'] = $this->uploadImages($request->file('images'),'size',["920-380" , "600" , "920"]);
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');
        $inputs["slug"] = MyProvider::createSlug($inputs["slug"]);
        auth()->user()->size()->create($inputs);

        return redirect(route('size.index',['SID' => '204']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sizes  $size
     * @return \Illuminate\Http\Response
     */
    public function show($size)
    {
        $size=Sizes::find($size);
        return view('admin.size.show',compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sizes  $size
     * @return \Illuminate\Http\Response
     */
    public function edit($size)
    {
        $size=Sizes::find($size);
        $productCategories = ProductCategories::all();
        return view('admin.size.edit',compact('size','productCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sizes  $size
     * @return \Illuminate\Http\Response
     */
    public function update(SizesRequest $request, $size)
    {
        $file = $request->file('images');
        $inputs = $request->all();
        $size=Sizes::find($size);

        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'),'size',["920-380" , "600" , "920"]);
        } else {
            $inputs['images'] = $size->images;
        }
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');
        $inputs["slug"] = MyProvider::createSlug($inputs["slug"]);

        $size->update($inputs);

        return redirect(route('size.index',['SID' => '204']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sizes  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($size)
    {
        Sizes::find($size)->delete();
        return redirect(route('size.index',['SID' => '204']));
    }



}
