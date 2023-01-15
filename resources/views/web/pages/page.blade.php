@extends('web.master')
@section('meta')
    <title>قیمت میلگرد ؛ اطلاع از قیمت روز آهن آلات + خرید میلگرد| شرکت آسن </title>
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
    <section class="latest-section">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    {!! \App\Providers\MyProvider::_text($page->body)!!}
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </section>

@endsection