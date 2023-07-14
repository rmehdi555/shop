@extends('web.master')
@section('meta')
    <title> {{$product->seo_title}} </title>
    <meta name="description"
          content="{{$product->seo_description}}"/>
    <meta property="og:title" content=" {{$product->seo_title}} "/>
    <meta property="og:description"
          content="{{$product->seo_description}} "/>
    <meta name="robots" content="{{$product->seo_index?"index":"noindex"}},{{$product->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$product->seo_canonical??url()->current()}}">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Club Section Begin -->
    <section class="club-section spad" style="padding:10px 10px 10px 10px; ">
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
                                        <h5>{{__('web/public.place_of_delivery')}}</h5>
                                        <p>{{__('web/public.product_place_of_delivery_'.$product->place_of_delivery)}}</p>
                                    </li>
                                    <li>
                                        <h5>{{__('web/public.unit')}}</h5>
                                        <p>{{empty($product->unit)?"_":__('web/public.unit_'.$product->unit)}}</p>
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

@endsection