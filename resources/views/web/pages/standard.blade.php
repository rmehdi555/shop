@extends('web.master')
@section('meta')
    <title> {{$standard->seo_title}} </title>
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
        "name": "{{\App\Providers\MyProvider::_text($standard->category->title)}}",
        "item": "{{route('web.show.category',$standard->category->slug)}}"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "{{\App\Providers\MyProvider::_text($standard->title)}}"
      }]
    }
    </script>
    <meta name="description"
          content="{{$standard->seo_description}}"/>
    <meta property="og:title" content=" {{$standard->seo_title}} "/>
    <meta property="og:description"
          content="{{$standard->seo_description}} "/>
    <meta name="robots" content="{{$standard->seo_index?"index":"noindex"}},{{$standard->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$standard->seo_canonical??url()->current()}}">
@endsection
@section('content')

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home"></i><a href="{{route('web.home')}}">آسن</a></li>
                <li class="breadcrumb-item"><a href="{{route('web.show.category',$standard->category->slug)}}">{{\App\Providers\MyProvider::_text($standard->category->title)}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\App\Providers\MyProvider::_text($standard->title)}}</li>
            </ol>
        </nav>
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


