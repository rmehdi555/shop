<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuCategoriesRequest;
use App\MenuCategories;
use App\Providers\MyProvider;
use Illuminate\Http\Request;

class MenuCategoriesController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID=$request->SID;
        $allMenuCategories=MenuCategories::all();
        return view('admin.menu-categories.index',compact('allMenuCategories','SID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $SID=$request->SID;
        $categories=MenuCategories::with('children')->get();
        return view('admin.menu-categories.create',compact('SID','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuCategoriesRequest $request)
    {
        $inputs=$request->all();
        $file = $request->file('images');
        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'),'menuCategories',["300" , "600" , "900"]);
        } else {
            $inputs['images'] = [];
        }
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["description"]=MyProvider::_insert_text($inputs,'description');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');

        auth()->user()->menuCategories()->create($inputs);

        return redirect(route('menuCategories.index',['SID' => '700']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuCategories  $menuCategories
     * @return \Illuminate\Http\Response
     */
    public function show($menuCategories)
    {
        $SID=700;
        $categories=MenuCategories::with('children')->get();
        $menuCategories=MenuCategories::find($menuCategories);
        return view('admin.menu-categories.show',compact('menuCategories','categories','SID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuCategories  $menuCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($menuCategories)
    {
        $SID=700;
        $categories=MenuCategories::with('children')->get();
        $menuCategories=MenuCategories::find($menuCategories);
        return view('admin.menu-categories.edit',compact('menuCategories','categories','SID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuCategories  $menuCategories
     * @return \Illuminate\Http\Response
     */
    public function update(MenuCategoriesRequest $request, $menuCategories)
    {
        $file = $request->file('images');
        $inputs = $request->all();
        $menuCategories=MenuCategories::find($menuCategories);

        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'),'menuCategories',["300" , "600" , "900"]);
        } else {
            $inputs['images'] = $menuCategories->images;
        }
        $inputs["title"]=MyProvider::_insert_text($inputs,'title');
        $inputs["description"]=MyProvider::_insert_text($inputs,'description');
        $inputs["body"]=MyProvider::_insert_text($inputs,'body');

        $menuCategories->update($inputs);

        return redirect(route('menuCategories.index',['SID' => '700']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuCategories  $menuCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($menuCategories)
    {
        MenuCategories::find($menuCategories)->delete();
        return redirect(route('menuCategories.index',['SID' => '700']));
    }

}
