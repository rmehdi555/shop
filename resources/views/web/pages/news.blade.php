@extends('web.master')
@section('meta')
    <title> {{$item->seo_title}} </title>
    <meta name="description"
          content="{{$item->seo_description}}"/>
    <meta property="og:title" content=" {{$item->seo_title}} "/>
    <meta property="og:description"
          content="{{$item->seo_description}} "/>
    <meta name="robots" content="{{$item->seo_index?"index":"noindex"}},{{$item->seo_follow?"follow":"nofollow"}}">
@endsection
@section('content')

    <section class="padding-top-index">
    </section>

    <section class="blog-details-section spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="bh-text">
                        <div class="section-title">
                            <h1>
                                <a href="{{ route('web.show.news',$item->slug) }}"><span>{{\App\Providers\MyProvider::_text($item->title)}}</span></a>
                            </h1>
                            <br>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar"></i>انتشار {{ \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') }}
                                    <i class="fa fa-calendar"></i>آخرین به روز رسانی  {{empty($item->updated_at)? \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($item->updated_at,'Y/n/j')}}
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 left-blog-pad">
                    <div class="bd-text">
                        {!! \App\Providers\MyProvider::_text($item->body) !!}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="bs-categories">
                            <div class="section-title sidebar-title">
                                <h5>{{__('web/public.category')}}</h5>
                            </div>
                            <ul>
                                @foreach($category as $item)
                                    <li>
                                        <a href="{{ route('web.show.news.category',$item->slug)}}">{{\App\Providers\MyProvider::_text($item->title)}}</a>
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