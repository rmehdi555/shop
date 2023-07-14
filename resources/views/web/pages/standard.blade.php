@extends('web.master')
@section('meta')
    <title> {{$standard->seo_title}} </title>
    <meta name="description"
          content="{{$standard->seo_description}}"/>
    <meta property="og:title" content=" {{$standard->seo_title}} "/>
    <meta property="og:description"
          content="{{$standard->seo_description}} "/>
    <meta name="robots" content="{{$standard->seo_index?"index":"noindex"}},{{$standard->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$standard->seo_canonical??url()->current()}}">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products))
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <a href="{{ route('web.show.standard',$standard->slug) }}" target="_blank">{{\App\Providers\MyProvider::_text($standard->title)}} :</a>
                            </h2>
                            <p>
                                {{\App\Providers\MyProvider::_text($standard->description)}}
                            </p>
                        </div>

                        <x-web-show-product-in-factory :products="$products">
                        </x-web-show-product-in-factory>

                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- Latest Section End -->


    <section class="club-section spad" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.09); margin: 30px">
        <div class="container">
            <div class="club-content">
                <div class="row">
                    <div id="content" class="col-sm-12">
                        {!! \App\Providers\MyProvider::_text($standard->body)!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


