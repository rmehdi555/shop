<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\News;
use App\NewsCategories;
use App\Providers\MyProvider;
use Illuminate\Http\Request;

class NewsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $SID = $request->SID;
        $news = News::all();
        if (isset($request->type)) {
            if ($request->type == 'news') {
                $newsCategory = NewsCategories::where('parent_id', config('app.newsId.news'))->pluck('id')->toArray();
                $news = News::whereIn('news_categories_id', $newsCategory)->get();
            }
            if ($request->type == 'article') {
                $newsCategory = NewsCategories::where('parent_id', config('app.newsId.article'))->pluck('id')->toArray();
                $news = News::whereIn('news_categories_id', $newsCategory)->get();
            }
        }
        return view('admin.news.index', compact('news', 'SID'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $SID = $request->SID;
        $categories = NewsCategories::with('children')->get();
        if (isset($request->type)) {
            if ($request->type == 'news') {
                $categories = NewsCategories::where('parent_id', config('app.newsId.news'))->with('children')->get();
            }
            if ($request->type == 'article') {
                $categories = NewsCategories::where('parent_id', config('app.newsId.article'))->with('children')->get();
            }
        }
        return view('admin.news.create', compact('SID', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $inputs = $request->all();
        $file = $request->file('images');
        if ($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'), 'news', ["64", "300", "600", "1200"]);
        } else {
            $inputs['images'] = [];
        }
        $inputs["title"] = MyProvider::_insert_text($inputs, 'title');
        $inputs["description"] = MyProvider::_insert_text($inputs, 'description');
        $inputs["body"] = MyProvider::_insert_text($inputs, 'body');
//        $inputs["tags"] = str_replace('،', ',', $inputs["tags"]);

        $news = auth()->user()->news()->create($inputs);

        $newsCategory = NewsCategories::where('parent_id', config('app.newsId.news'))->pluck('id')->toArray();
        if (in_array($news->news_categories_id, $newsCategory)) {
            $type = 'news';
            $SID = '20';
        } else {
            $type = 'article';
            $SID = '20';
        }

        return redirect(route('news.index', ['SID' => $SID, 'type' => $type]));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show($news)
    {
        $SID = 20;
        $news = News::find($news);
        $categories = NewsCategories::with('children')->get();
        return view('admin.news.show', compact('news', 'categories', 'SID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit($news)
    {
        $SID = 20;
        $news = News::find($news);

        $newsCategory = NewsCategories::where('parent_id', config('app.newsId.news'))->pluck('id')->toArray();
        if (in_array($news->news_categories_id, $newsCategory)) {
            $categories = NewsCategories::where('parent_id', config('app.newsId.news'))->with('children')->get();
        } else {
            $categories = NewsCategories::where('parent_id', config('app.newsId.article'))->with('children')->get();
        }

        return view('admin.news.edit', compact('news', 'categories', 'SID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $news)
    {
        $file = $request->file('images');
        $inputs = $request->all();
        $news = News::find($news);

        if ($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'), 'news', ["64", "300", "600", "1200"]);
        } else {
            $inputs['images'] = $news->images;
        }
        $inputs["title"] = MyProvider::_insert_text($inputs, 'title');
        $inputs["description"] = MyProvider::_insert_text($inputs, 'description');
        $inputs["body"] = MyProvider::_insert_text($inputs, 'body');
//        $inputs["tags"] = str_replace('،', ',', $inputs["tags"]);

        $news->update($inputs);

        $newsCategory = NewsCategories::where('parent_id', config('app.newsId.news'))->pluck('id')->toArray();
        if (in_array($news->news_categories_id, $newsCategory)) {
            $type = 'news';
            $SID = '20';
        } else {
            $type = 'article';
            $SID = '22';
        }


        return redirect(route('news.index', ['SID' => $SID, 'type' => $type]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($news)
    {
        //dd($news);
        News::find($news)->delete();
        return redirect(route('news.index', ['SID' => '20']));
    }
}
