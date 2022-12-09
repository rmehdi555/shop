<?php

namespace App\Http\Controllers;

use App\News;
use App\ProductCategories;
use App\Products;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('updated_at', 'desc')->select('title','id','updated_at','slug')->get();
        $news = News::orderBy('updated_at', 'desc')->select('title','id','updated_at','slug')->get();
        $productCategories = ProductCategories::orderBy('updated_at', 'desc')->select('title','id','updated_at','slug')->get();
        return response()->view('sitemap.index', [
            'products' => $products,
            'news' => $news,
            'productCategories' => $productCategories,
        ])->header('Content-Type', 'text/xml');
    }
}
