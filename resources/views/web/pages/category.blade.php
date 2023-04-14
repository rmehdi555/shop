@extends('web.master')
@section('meta')
    <title> {{$category->seo_title}} </title>
    <meta name="description"
          content="{{$category->seo_description}}"/>
    <meta property="og:title" content=" {{$category->seo_title}} "/>
    <meta property="og:description"
          content="{{$category->seo_description}} "/>
    <meta name="robots" content="{{$category->seo_index?"index":"noindex"}},{{$category->seo_follow?"follow":"nofollow"}}">
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

                        <x-web-show-product-in-category :category="$category">
                        </x-web-show-product-in-category>

                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- Latest Section End -->

@endsection