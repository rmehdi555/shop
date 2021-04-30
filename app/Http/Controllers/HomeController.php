<?php

namespace App\Http\Controllers;

use Adlino\Locations\Facades\locations;
use App\News;
use App\ProductCategories;
use App\Products;
use App\Providers\MyProvider;
use App\Provinces;
use App\Slider;
use App\Visit;
use App\WebPages;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {

        //shamsi date
        //https://hekmatinasser.github.io/verta/
//        $v=Verta::now();
//        dd($v->formatWord('l').' '.$v->format('d').' '.$v->formatWord('F').' '.$v->format('Y'));
        $slider=Slider::where('status','=','1')->orderBy('priority','desc')->get();
       // محصولات ویژه
        $specialProducts=Products::where([['type','=','special'],['status','=','1'] ])->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::where('status','=','1')->orderBy('created_at','desc')->limit(10)->get();


        $categoryName[20]=ProductCategories::find(20);
        $products20=Products::where([['product_categories_id','=','20'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[21]=ProductCategories::find(21);
        $products21=Products::where([['product_categories_id','=','21'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[22]=ProductCategories::find(22);
        $products22=Products::where([['product_categories_id','=','22'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[23]=ProductCategories::find(23);
        $products23=Products::where([['product_categories_id','=','23'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[24]=ProductCategories::find(24);
        $products24=Products::where([['product_categories_id','=','24'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[25]=ProductCategories::find(25);
        $products25=Products::where([['product_categories_id','=','25'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        $categoryName[26]=ProductCategories::find(26);
        $products26=Products::where([['product_categories_id','=','26'],['status','=','1'] ])->orderBy('created_at','desc')->limit(5)->get();
        return view('web.pages.index',compact('slider','specialProducts','newProducts','products20','products21','products22','products23','products24','products25','products26','categoryName'));
    }
    public function showCategory($id)
    {
        $category=ProductCategories::find($id);
        if(!isset($category))
            return redirect()->route('web.404');
        // محصولات ویژه
        $specialProducts=Products::where([['type','=','special'],['status','=','1'] ])->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::where('status','=','1')->orderBy('created_at','desc')->limit(10)->get();
        return view('web.pages.category',compact('category','specialProducts','newProducts'));
    }
    public function showProduct($id)
    {
        $product=Products::find($id);
        if(!isset($product) OR empty($product))
            return redirect()->route('web.404');
        // محصولات ویژه
        $specialProducts=Products::where([['type','=','special'],['status','=','1'] ])->limit(10)->get();
        //جدید ترین محصولات
        $newProducts=Products::where('status','=','1')->orderBy('created_at','desc')->limit(10)->get();
        return view('web.pages.product',compact('product','specialProducts','newProducts'));
    }
    public function showNews($id)
    {

        $news=News::find($id);
        if(!isset($news) OR empty($news))
            return redirect()->route('web.404');
        $allNews=News::where('status','=','1')->orderBy('priority')->get();
        return view('web.pages.news',compact('news','allNews'));
    }
    public function showPage($id)
    {
        $page=WebPages::find($id);
        if(!isset($page) OR empty($page))
            return redirect()->route('web.404');
        return view('web.pages.page',compact('page'));
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

    public function web404()
    {
        return view('web.pages.404');
    }
    public function web500()
    {
        return view('web.pages.500');
    }
}
