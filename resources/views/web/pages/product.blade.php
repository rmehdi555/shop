@extends('web.master')
@section('meta')
    <title> {{$product->tag_title}} </title>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "{{\App\Providers\MyProvider::_text($product->title)}}",
        "image": [
          "{{asset($product->images["images"]["500"])}}",
         ],
        "description": "{{$product->seo_description}}",
        "sku": "{{$product->id}}",
        "brand": {
          "@type": "Brand",
          "name": "آسن"
        },
        "review": {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
            "@type": "Organization",
            "name": "آسن"
          }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4",
          "reviewCount": "55"
        },
        "offers": {
         "@type": "Offer",
         "url": "{{url()->current()}}",
         "priceCurrency": "IRR",
         "price": "{{$product->price}}",
         "priceValidUntil": "{{\Carbon\Carbon::now()->addDay(7)}}",
         "itemCondition": "https://schema.org/NewCondition",
         "availability": "https://schema.org/InStock"
        }
      }
    </script>

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
        "name": "{{\App\Providers\MyProvider::_text($product->category->title)}}",
        "item": "{{route('web.show.category',$product->category->slug)}}"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "{{\App\Providers\MyProvider::_text($product->factoryDetails->title)}}",
        "item": "{{route('web.show.factory',$product->factoryDetails->slug)}}"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "{{\App\Providers\MyProvider::_text($product->title)}}"
      }]
    }
    </script>
    <meta name="description"
          content="{{$product->seo_description}}"/>
    <meta property="og:title" content=" {{$product->seo_title}} "/>
    <meta property="og:description"
          content="{{$product->seo_description}} "/>
    <meta name="robots" content="{{$product->seo_index?"index":"noindex"}},{{$product->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$product->seo_canonical??url()->current()}}">
@endsection
@section('content')

    <!-- Club Section Begin -->
    <section class="club-section spad" style="padding:10px 10px 10px 10px; ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home"></i><a href="{{route('web.home')}}">آسن</a></li>
                <li class="breadcrumb-item"><a href="{{route('web.show.category',$product->category->slug)}}">{{\App\Providers\MyProvider::_text($product->category->title)}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('web.show.factory',$product->factoryDetails->slug)}}">{{\App\Providers\MyProvider::_text($product->factoryDetails->title)}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\App\Providers\MyProvider::_text($product->title)}}</li>
            </ol>
        </nav>
        <div class="container" >
            <div class="club-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cc-pic">
                            <img src="{{asset($product->images["images"]["500"])}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}">
                        </div>
                    </div>
                    <div class="col-lg-6" style=" padding:15px 15px 15px 15px;  border-radius: 15px;    box-shadow: 0 1px 1px rgb(0 0 0 / 16%);
    background-color: #dee2e6;">
                        <div class="cc-text">
                            <div class="ct-title">
                                <h1>{{\App\Providers\MyProvider::_text($product->title)}}</h1>
                                {{--<p>{!! \App\Providers\MyProvider::_text($product->body)!!} </p>--}}
                            </div>
                            <div class="ct-widget" style="padding:15px 15px">
                                <ul>
                                    <li>
                                        <h5>{{__('web/public.code')}}</h5>
                                        <p>{{$product->id}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.size')}}</h5>
                                        <p>{{empty($product->sizeDetails->title)?"_":$product->sizeDetails->title}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.factory')}}</h5>
                                        <p>{{empty($product->factoryDetails->title)?"_":$product->factoryDetails->title}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.standard')}}</h5>
                                        <p>{{empty($product->standardDetails->title)?"_":$product->standardDetails->title}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.category')}}</h5>
                                        <p>{{empty($product->category->title)?"_":$product->category->title}}</p>
                                    </li>

                                    <li>
                                        <h5>{{__('web/public.place_of_delivery')}}</h5>
                                        <p>{{__('web/public.product_place_of_delivery_'.$product->place_of_delivery)}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.unit')}}</h5>
                                        <p>{{empty($product->unit)?"_":__('web/public.unit_'.$product->unit)}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.updated_at')}}</h5>
                                        <p>{{empty($product->updated_at)? \App\Providers\MyProvider::show_date($product->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($product->updated_at,'Y/n/j')}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.price')}}</h5>
                                        <p>@if($product->price==0) <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone"]->value)}}" target="_blank" rel="nofollow"  class="call-for-price">{{__('web/public.call_for_price')}}</a>
                                            @elseif(session('Local_Currency')=="USD" AND $product->price_usd!=0){{$product->price_usd}}{{__('web/public.currency_name_'.session('Local_Currency'))}}
                                            @elseif(session('Local_Currency')=="EUR" AND $product->price_euro!=0){{$product->price_euro}}{{__('web/public.currency_name_'.session('Local_Currency'))}}
                                            @else {{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}@endif</p>
                                    </li>
                                    {{--<li>--}}
                                    {{--<button type="button" id="button-cart" class="btn btn-primary btn-lg"> {{__('web/public.add_cart')}}</button>--}}
                                    {{--</li>--}}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 left-blog-pad">
                    <div class="bd-text">
                        {!! \App\Providers\MyProvider::_text($product->body) !!}

                    </div>
                </div>
            
            </div>
        </div>
    </section>

@endsection
