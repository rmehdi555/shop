<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategories;
use App\ProductCategories;
use App\Products;
use App\Providers\MyProvider;
use App\WebPages;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ProductCategories::where('status', '=', '1')->orderBy('priority', 'desc')->limit(7)->get();
        $newsCategory = NewsCategories::where([['parent_id', '=', config('app.newsId.news')], ['status', '=', '1']])->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->pluck('id')->toArray();
        $news = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->limit(3)->get();
        $newsCategory = NewsCategories::where([['parent_id', '=', config('app.newsId.article')], ['status', '=', '1']])->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->pluck('id')->toArray();
        $articles = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->limit(3)->get();
        return view('web.pages.index', compact('categories', 'news', 'articles'));
    }

    public function showCategory($slug)
    {
        $category = ProductCategories::where('slug',$slug)->first();
        if (!isset($category))
            return redirect()->route('web.404');
        // محصولات ویژه
        $specialProducts = Products::where([['type', '=', 'special'], ['status', '=', '1']])->limit(10)->get();
        //جدید ترین محصولات
        $newProducts = Products::where('status', '=', '1')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('web.pages.category', compact('category', 'specialProducts', 'newProducts'));
    }

    public function showProduct($slug)
    {
        $product = Products::where('slug',$slug)->first();
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
        $categoryN = NewsCategories::where('slug',$slug)->first();
        if (!isset($categoryN))
            return redirect()->route('web.404');

        $category = NewsCategories::where([['parent_id', '=', 0], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        $newsCategory = NewsCategories::where([['parent_id', '=', $categoryN->id], ['status', '=', '1']])->orderBy('priority', 'desc')->pluck('id')->toArray();
        $news = News::whereIn('news_categories_id', $newsCategory)->where('status', '=', '1')->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->paginate(10);
        return view('web.pages.news-category', compact('news', 'category','categoryN'));
    }

    public function showNews($slug)
    {

        $item = News::where('slug',$slug)->first();
        if (!isset($item) OR empty($item))
            return redirect()->route('web.404');
        $category = NewsCategories::where([['parent_id', '=', 0], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        return view('web.pages.news', compact('item', 'category'));
    }

    public function showPage($id)
    {
        $page = WebPages::find($id);
        if (!isset($page) OR empty($page))
            return redirect()->route('web.404');
        return view('web.pages.page', compact('page'));
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
        $categories = ProductCategories::where([['parent_id', '=', 19], ['status', '=', '1']])->orderBy('priority', 'desc')->get();
        if (!isset($categories))
            return redirect()->route('web.404');
        return view('web.pages.show-all-milegerd', compact('categories'));
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
