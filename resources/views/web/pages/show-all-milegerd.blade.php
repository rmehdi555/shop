@extends('web.master')
@section('meta')
    <title> {{$pageDetails->seo_title}} </title>
    <meta name="description"
          content="{{$pageDetails->seo_description}}"/>
    <meta property="og:title" content=" {{$pageDetails->seo_title}} "/>
    <meta property="og:description"
          content="{{$pageDetails->seo_description}} "/>
    <meta name="robots" content="{{$pageDetails->seo_index?"index":"noindex"}},{{$pageDetails->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$pageDetails->seo_canonical??url()->current()}}">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>


    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    @if(isset($category->activeProducts()[0]))
                        <div class="col-lg-12">

                            <x-web-show-product-in-category :category="$category">
                            </x-web-show-product-in-category>

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- Latest Section End -->

    <section class="club-section spad" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.09); margin: 30px">
        <div class="container">
            <div class="club-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cc-text">
                            <div class="ct-title">
                                <h1>قیمت میلگرد</h1>
                                <p>قیمت های اعلام شده امروز برای میلگرد</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cc-pic">
                            <img src="{{config('app.url').'/web/2021/img/milgerd.jpg'}}"
                                 style="max-height: 200px"
                                 alt="قیمت میلگرد">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection