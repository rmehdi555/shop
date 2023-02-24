@extends('web.master')
@section('meta')
    <title>آسن - قیمت خرید آهن آلات و فلزات</title>
    <meta name="description"
          content="قیمت آهن امروز کیلویی بازار برای خرید آهن از
اصفهان و مشهد و اهواز و سراسر کشور و از کارخانه دست دوم و نو آنلاین از
فروشگاه اینترنتی آهن آلات آسن."/>
    <meta property="og:title" content="آسن - قیمت خرید آهن آلات و فلزات"/>
    <meta property="og:description"
          content="قیمت آهن امروز کیلویی بازار برای خرید آهن از
اصفهان و مشهد و اهواز و سراسر کشور و از کارخانه دست دوم و نو آنلاین از
فروشگاه اینترنتی آهن آلات آسن."/>

@endsection
@section('content')

    <section class="padding-top-index">
    </section>

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($news[0]))
                    <div class="col-lg-4">

                        <x-web-show-news-in-index :news="$news">
                        </x-web-show-news-in-index>
                    </div>



                @endif

                @if(isset($categories[0]))
                    <div class="col-lg-8">
                        <x-web-show-product-in-index :category="$categories[0]">
                        </x-web-show-product-in-index>

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
                    <div class="col-lg-3">
                        <div class="cc-pic">
                            <img src="{{asset($siteDetailsProvider["image_logo"]->images["images"]["original"])}}"
                                 alt="آسن – قیمت خرید آهن آلات و فلزات">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="cc-text">
                            <div class="ct-title">
                                <h1>خرید آهن از آسن</h1>
                                <p>
                                    در سرزمین آسن یک گروه کارآمد و توانا جمع شده است که قصد دارد با رویکرد به کسب و کار
                                    جهانی و فراهم­ سازی بستری آنلاین، فروش فلزاتی مانند میلگرد، تیرآهن، ورق و دیگر
                                    محصولات فلزی را بدون واسطه، با کمترین قیمت و ارزانترین روش در اختیار مصرف کنندگان
                                    پروژه ­های عمرانی قرار دهد.
                                </p>
                                <h2>قیمت آهن در بازار</h2>
                                <p>
                                    هر روز قیمت میلگرد و آهن در سایت آسن برروزرسانی میشود تا منبع درست و به رروزی از
                                    قیمت آهن باشد .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($articles[0]))
                    <div class="col-lg-4">

                        <x-web-show-article-in-index :articles="$articles">
                        </x-web-show-article-in-index>
                    </div>



                @endif
                @if(isset($categories[1]))
                    <div class="col-lg-8">

                        <x-web-show-product-in-index :category="$categories[1]">
                        </x-web-show-product-in-index>

                    </div>



                @endif
            </div>
        </div>
    </section>

    <section class="club-section spad" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.15); margin: 30px">
        <div class="container">
            <div class="club-content">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="cc-text">
                            <div class="ct-title">
                                <h2>خرید آهن از کارخانه</h2>
                                <p>
                                    در شرکت آسن امکان خرید آهن از کارخانه بدون واسط وجود دارد ، کافیست با تیم فروش آسن
                                    تماس بگیرید تا قیمت آهن در کارخانه را به شما عزیزان اعلام کنند و برای خرید آهن آلات
                                    راهنمایی شوید .
                                </p>
                            </div>
                            <div class="ct-widget ct-title">
                                <h2> مزیت­های خرید از آسن</h2>
                                <br>
                                <ul>
                                    <li>
                                        <h5>صرفه جویی در زمان</h5>
                                    </li>
                                    <li>
                                        <h5>قیمت به صرفه</h5>
                                    </li>
                                    <li>
                                        <h5>خرید آنلاین و حضوری </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cc-pic">
                            <img src="{{config('app.url').'/web/2021/img/contact.png'}}"
                                 alt="آسن – قیمت خرید آهن آلات و فلزات">
                        </div>
                        <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}" target="_blank" rel="nofollow" type="button" class="btn btn-outline-danger" style="margin-right: 50px">{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_title"]->value)}} </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($categories[2]))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categories[2]">
                        </x-web-show-product-in-index>

                    </div>



                @endif

                @if(isset($categories[3]))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categories[3]">
                        </x-web-show-product-in-index>

                    </div>



                @endif
            </div>
        </div>
    </section>
@endsection