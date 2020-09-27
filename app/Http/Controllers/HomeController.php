<?php

namespace App\Http\Controllers;

use App\ProductCategories;
use App\Products;
use App\Providers\MyProvider;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $slider=Slider::where('status','=','1')->orderBy('priority','desc')->get();
        if(session('locale')!=null)
            App::setLocale(session('locale'));

       // محصولات ویژه
        $specialProducts=Products::where('type','=','special')->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::orderBy('created_at','desc')->limit(10)->get();
        return view('web.pages.index',compact('slider','specialProducts','newProducts'));
    }
    public function showCategory($id)
    {
        $category=ProductCategories::find($id);
        if(session('locale')!=null)
            App::setLocale(session('locale'));

        // محصولات ویژه
        $specialProducts=Products::where('type','=','special')->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::orderBy('created_at','desc')->limit(10)->get();
        return view('web.pages.category',compact('category','specialProducts','newProducts'));
    }
    public function showProduct($id)
    {
        $product=Products::find($id);
        if(session('locale')!=null)
            App::setLocale(session('locale'));

        // محصولات ویژه
        $specialProducts=Products::where('type','=','special')->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::orderBy('created_at','desc')->limit(10)->get();
        return view('web.pages.product',compact('product','specialProducts','newProducts'));
    }

    public function changeLang($locale)
    {
        if (! in_array($locale, ['en', 'fa'])) {
            return \redirect(\route('web.home'));
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function changeCurrency($currency)
    {
        $allCurrency=MyProvider::getCurrencyPrice();
        if (! in_array($currency, $allCurrency)) {
            return \redirect(\route('web.home'));
        }
        session()->put('Local_Currency', $currency);
        return redirect()->back();
    }
}
