@extends('web.master')
@section('meta')
    <title>{{\App\Providers\MyProvider::_text($item->title)}} | آسن </title>
    <meta name="description"
          content="شرکت آسن : اخبار مربوط به آهن آلات  {{\App\Providers\MyProvider::_text($item->description)}}"/>
    <meta property="og:title" content="{{\App\Providers\MyProvider::_text($item->title)}} شرکت اسن |"/>
    <meta property="og:description"
          content="شرکت آسن : اخبار مربوط به آهن آلات  {{\App\Providers\MyProvider::_text($item->description)}}"/>

    <meta name="keywords" content="آسن, assen, قیمت آهن,شرکت آسن,قیمت میلگرد,قیمت روز میلگرد,اخبار میلگرد,مقاله آهن,اخبار آهن,کمترین قیمت میلگرد,{{\App\Providers\MyProvider::_text($item->tags)}}">
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