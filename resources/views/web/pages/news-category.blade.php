@extends('web.master')
@section('meta')
    <title> اخبار و مقالات آهن آلات | شرکت اسن </title>
    <meta name="description"
          content="شرکت آسن : اخبار و مقالات میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات  "/>
    <meta property="og:title" content=" اخبار و مقالات آهن آلات | شرکت اسن"/>
    <meta property="og:description"
          content="شرکت آسن : اخبار و مقالات میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات  "/>

    <meta name="keywords"
          content="آسن, assen, قیمت آهن,شرکت آسن,قیمت میلگرد,کمترین قیمت میلگرد,اخبار میلگرد , مقاله آهن آلات , خبر بازار آهن , مقاله فلزات">
@endsection
@section('content')

    <section class="padding-top-index">
    </section>

    <!-- Latest Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-blog-pad">
                    <div class="blog-items">
                        @foreach($news as $item)
                            <div class="single-item">
                                <div class="bi-pic">
                                    <img src="{{$item->images['images'][300]}}"
                                         alt="{{\App\Providers\MyProvider::_text($item->title)}}">
                                </div>
                                <div class="bi-text">
                                    <h1>
                                        <a href="{{ route('web.show.news',$item->slug) }}">{{\App\Providers\MyProvider::_text($item->title)}}</a>
                                    </h1>
                                    <ul>
                                        <li>
                                            <i class="fa fa-calendar"></i> {{ \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') }}
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