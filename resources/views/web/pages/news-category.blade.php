@extends('web.master')
@section('meta')
    <title> {{$categoryN->seo_title}} </title>
    <meta name="description"
          content="{{$categoryN->seo_description}}"/>
    <meta property="og:title" content=" {{$categoryN->seo_title}} "/>
    <meta property="og:description"
          content="{{$categoryN->seo_description}} "/>
    <meta name="robots" content="{{$categoryN->seo_index?"index":"noindex"}},{{$categoryN->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$categoryN->seo_canonical??url()->current()}}">
@endsection
@section('content')



    <!-- Latest Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-blog-pad">
                    <div class="blog-items">
                        @foreach($news as $item)
                            <div class="single-item">
                                <div class="bi-pic">
                                    <img src="{{asset($item->images['images'][300])}}"
                                         alt="{{\App\Providers\MyProvider::_text($item->title)}}">
                                </div>
                                <div class="bi-text">
                                    <h1>
                                        <a href="{{ route('web.show.news',$item->slug) }}">{{\App\Providers\MyProvider::_text($item->title)}}</a>
                                    </h1>
                                    <ul>
                                        <li>
                                            <i class="fa fa-calendar"></i> انتشار {{ \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') }}
                                            <i class="fa fa-calendar"></i> آخرین به روز رسانی {{ \App\Providers\MyProvider::show_date($item->updated_at,'Y/n/j') }}
                                        </li>
                                    </ul>
                                    <p>{{\App\Providers\MyProvider::_text($item->description)}}</p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    {!!  $news->links() !!}
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-sidebar">
                        <div class="bs-categories">
                            <div class="section-title sidebar-title">
                                <h5>{{__('web/public.category')}}</h5>
                            </div>
                            <ul>
                                @foreach($category as $item)
                                    <li>
                                        <a href="{{ route('web.show.news.category',$item->slug) }}">{{\App\Providers\MyProvider::_text($item->title)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection