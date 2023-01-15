@extends('web.master')
@section('meta')
    <title>قیمت میلگرد | شرکت آسن</title>
    <meta name="description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>
    <meta property="og:title" content="قیمت میلگرد امروز؛ اطلاع از قیمت روز آهن آلات + خرید میلگرد| آسن"/>
    <meta property="og:description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>

    <meta name="keywords" content="آسن, assen, قیمت آهن,قیمت روز میلگرد,میلگرد,کمترین قیمت آهن,قیمت میلگرد,قیت تیرآهن,قیمت ورق آهنی,قیمت فلزات,بازار آهن,شرکت آسن">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title-404 text-center">404</h1>
                    <p class="text-center lead">{{__('web/messages.404_1')}}<br>
                        {{__('web/messages.404_2')}} </p>
                    <div class="buttons text-center"> <a class="btn btn-primary btn-lg" href="{{ route('web.index') }}"> {{__('web/public.continuation')}}</a> </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection