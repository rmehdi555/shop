@extends('web.master')
@section('meta')
    <title> {{$size->tag_title}} </title>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "آسن",
        "item": "{{route('web.home')}}"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "{{\App\Providers\MyProvider::_text($size->category->title)}}",
        "item": "{{route('web.show.category',$size->category->slug)}}"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "{{\App\Providers\MyProvider::_text($size->title)}}"
      }]
    }
    </script>
    <meta name="description"
          content="{{$size->seo_description}}"/>
    <meta property="og:title" content=" {{$size->seo_title}} "/>
    <meta property="og:description"
          content="{{$size->seo_description}} "/>
    <meta name="robots" content="{{$size->seo_index?"index":"noindex"}},{{$size->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$size->seo_canonical??url()->current()}}">
@endsection
@section('content')

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home"></i><a href="{{route('web.home')}}">آسن</a></li>
                <li class="breadcrumb-item"><a href="{{route('web.show.category',$size->category->slug)}}">{{\App\Providers\MyProvider::_text($size->category->title)}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\App\Providers\MyProvider::_text($size->title)}}</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                @if(isset($products))
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>
                                <a href="{{ route('web.show.size',$size->slug) }}" target="_blank">{{\App\Providers\MyProvider::_text($size->title)}} :</a>
                            </h2>
                            <p>
                                {{\App\Providers\MyProvider::_text($size->description)}}
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
                        {!! \App\Providers\MyProvider::_text($size->body)!!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


