<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FactoriesRequest;
use App\ProductCategories;
use App\Providers\MyProvider;
use App\Factories;
use Illuminate\Http\Request;

class FactoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID = $request->SID;
        $factories = Factories::all();
        return view('admin.factory.index', compact('factories', 'SID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $SID = $request->SID;
        $productCategories = ProductCategories::all();
        return view('admin.factory.create', compact('SID', 'productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactoriesRequest $request)
    {
        $inputs = $request->all();
        $inputs['images'] = $this->uploadImages($request->file('images'), 'factory', ["920-380", "600", "920"]);
        $inputs["title"] = MyProvider::_insert_text($inputs, 'title');
        $inputs["slug"] = MyProvider::createSlug($inputs["slug"]);
        $inputs["body"] = MyProvider::_insert_text($inputs, 'body');
        auth()->user()->factory()->create($inputs);

        return redirect(route('factory.index', ['SID' => '202']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factories $factory
     * @return \Illuminate\Http\Response
     */
    public function show($factory)
    {
        $factory = Factories::find($factory);
        return view('admin.factory.show', compact('factory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factories $factory
     * @return \Illuminate\Http\Response
     */
    public function edit($factory)
    {
        $factory = Factories::find($factory);
        $productCategories = ProductCategories::all();
        return view('admin.factory.edit', compact('factory', 'productCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Factories $factory
     * @return \Illuminate\Http\Response
     */
    public function update(FactoriesRequest $request, $factory)
    {
        $file = $request->file('images');
        $inputs = $request->all();
        $factory = Factories::find($factory);

        if ($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'), 'factory', ["920-380", "600", "920"]);
        } else {
            $inputs['images'] = $factory->images;
        }
        $inputs["title"] = MyProvider::_insert_text($inputs, 'title');
        $inputs["body"] = MyProvider::_insert_text($inputs, 'body');
        $inputs["slug"] = MyProvider::createSlug($inputs["slug"]);

        $factory->update($inputs);

        return redirect(route('factory.index', ['SID' => '202']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factories $factory
     * @return \Illuminate\Http\Response
     */
    public function destroy($factory)
    {
        Factories::find($factory)->delete();
        return redirect(route('factory.index', ['SID' => '202']));
    }


}
