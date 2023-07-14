<?php

namespace App\Http\Controllers;

use App\Factories;
use App\News;
use App\NewsCategories;
use App\ProductCategories;
use App\Products;
use App\Providers\MyProvider;
use App\Sizes;
use App\Standards;
use App\WebPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $pageDetails = WebPages::find(1);
        if (!isset($pageDetails) OR empty($pageDetails))
            return redirect()->route('web.404');

//        $categories = ProductCategories::where('status', '=', '1')->orderBy('priority', 'desc')->limit(7)->get();
//        $newsCategory = NewsCategories::where([['parent_id', '=', config('app.newsId.news')], ['status', '=', '1']])->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->pluck('id')->toArray();
//        $news = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->limit(3)->get();
//        $newsCategory = NewsCategories::where([['parent_id', '=', config('app.newsId.article')], ['status', '=', '1']])->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->pluck('id')->toArray();
//        $articles = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->limit(3)->get();


        $products=[];
        $products[1] = Products::where([['factory_id', '=', 3], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        $products[2] = Products::where([['factory_id', '=', 9], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        $products[3] = Products::where([['factory_id', '=', 5], ['status', '=', '1']])->orderBy('priority', 'desc')->get();

        return view('web.pages.index', compact( 'products', 'pageDetails'));
    }

    public function showCategory($slug)
    {
        $category = ProductCategories::where('slug', $slug)->first();
        if (!isset($category))
            return redirect()->route('web.404');

        $categories = ProductCategories::where([['parent_id', '=', $category->id], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        if (!isset($categories))
            return redirect()->route('web.404');


//        // محصولات ویژه
//        $specialProducts = Products::where([['type', '=', 'special'], ['status', '=', '1']])->limit(10)->get();
//        //جدید ترین محصولات
//        $newProducts = Products::where('status', '=', '1')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('web.pages.category', compact('category', 'categories'));
    }

    public function showFactory($slug)
    {
        $factory = Factories::where('slug', $slug)->first();
        if (!isset($factory))
            return redirect()->route('web.404');
        $products = Products::where([['factory_id', '=', $factory->id], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        return view('web.pages.factory', compact('factory', 'products'));
    }

    public function showSize($slug)
    {
        $size = Sizes::where('slug', $slug)->first();
        if (!isset($size))
            return redirect()->route('web.404');
        $products = Products::where([['size_id', '=', $size->id], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        return view('web.pages.size', compact('size', 'products'));
    }

    public function showStandard($slug)
    {
        $standard = Standards::where('slug', $slug)->first();
        if (!isset($standard))
            return redirect()->route('web.404');
        $products = Products::where([['standard_id', '=', $standard->id], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        return view('web.pages.standard', compact('standard', 'products'));
    }


    public function showProduct($slug)
    {
        $product = Products::where('slug', $slug)->first();
        if (!isset($product) OR empty($product))
            return redirect()->route('web.404');
        // محصولات ویژه
        $specialProducts = Products::where([['type', '=', 'special'], ['status', '=', '1']])->limit(10)->get();
        //جدید ترین محصولات
        $newProducts = Products::where('status', '=', '1')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('web.pages.product', compact('product', 'specialProducts', 'newProducts'));
    }

    public function showNewsCategory($slug)
    {
        $categoryN = NewsCategories::where('slug', $slug)->first();
        if (!isset($categoryN))
            return redirect()->route('web.404');

        $category = NewsCategories::where([['parent_id', '=', 0], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        $newsCategory = NewsCategories::where([['parent_id', '=', $categoryN->id], ['status', '=', '1']])->orderBy('priority', 'desc')->pluck('id')->toArray();
        $news = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.news-category', compact('news', 'category', 'categoryN'));
    }

    public function showNews($slug)
    {

        $item = News::where('slug', $slug)->first();
        if (!isset($item) OR empty($item))
            return redirect()->route('web.404');
        $category = NewsCategories::where([['parent_id', '=', 0], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        return view('web.pages.news', compact('item', 'category'));
    }

    public function showPage($id)
    {
        switch ($id) {
            case 1:
                return redirect(route('web.home'));
            case 2:
                return redirect(route('web.show.about_us'));
            case 3:
                return redirect(route('web.contact.us.index'));
            case 4:
                return redirect(route('web.HomeController.show.all.milegerd'));
        }
        $page = WebPages::find($id);
        if (!isset($page) OR empty($page))
            return redirect()->route('web.404');
        return view('web.pages.page', compact('page'));
    }

    public function aboutUs()
    {
        $page = WebPages::find(2);
        if (!isset($page) OR empty($page))
            return redirect()->route('web.404');
        return view('web.pages.about-us', compact('page'));
    }

    public function changeLang($locale)
    {
        if (!in_array($locale, ['en', 'fa'])) {
            return \redirect(\route('web.home'));
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function changeCurrency($currency)
    {
        $allCurrency = MyProvider::getCurrencyPrice();
        if (!in_array($currency, $allCurrency)) {
            return \redirect(\route('web.home'));
        }
        session()->put('Local_Currency', $currency);
        return redirect()->back();
    }

    public function showAllMilegerd()
    {
        $category = ProductCategories::find(19);
        return redirect(route('web.show.category', $category->slug));

        $pageDetails = WebPages::find(4);
        if (!isset($pageDetails) OR empty($pageDetails))
            return redirect()->route('web.404');

        $categories = ProductCategories::where([['parent_id', '=', 19], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        if (!isset($categories))
            return redirect()->route('web.404');
        return view('web.pages.show-all-milegerd', compact('categories', 'pageDetails'));
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
