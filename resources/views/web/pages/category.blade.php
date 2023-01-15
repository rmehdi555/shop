@extends('web.master')
@section('meta')
    <title> قیمت روز آهن آلات | شرکت آسن </title>
    <meta name="description"
          content="شرکت آسن : قیمت میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات  "/>
    <meta property="og:title" content="  قیمت روز آهن آلات | شرکت اسن"/>
    <meta property="og:description"
          content="شرکت آسن : قیمت میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات "/>

    <meta name="keywords" content="آسن, assen, قیمت آهن,شرکت آسن,قیمت میلگرد,کمترین قیمت میلگرد, بازار آهن , قیمت فلزات,قیمت تیرآهن,قیمت لوله آهنی,قیمت نبشی">
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