@extends('web.master')
@section('meta')
    <title> {{$category->seo_title}} </title>
    <meta name="description"
          content="{{$category->seo_description}}"/>
    <meta property="og:title" content=" {{$category->seo_title}} "/>
    <meta property="og:description"
          content="{{$category->seo_description}} "/>
    <meta name="robots" content="{{$category->seo_index?"index":"noindex"}},{{$category->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$category->seo_canonical??url()->current()}}">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Latest Section Begin -->

    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($category->activeProducts()[0]))
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <a href="{{ route('web.show.category',$category->slug) }}" target="_blank">{{\App\Providers\MyProvider::_text($category->title)}} :</a>
                            </h2>
                            <p>
                                {{\App\Providers\MyProvider::_text($category->description)}}
                            </p>
                        </div>

                        <x-web-show-product-in-factory :products="$category->activeProducts(50)">
                        </x-web-show-product-in-factory>

                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- Latest Section End -->


    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @foreach($categories as $item)
                    @if(isset($item->activeProducts()[0]))
                        <div class="col-lg-12">

                            <x-web-show-product-in-category :category="$item">
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
                    <div id="content" class="col-sm-12">
                        {!! \App\Providers\MyProvider::_text($category->body)!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


