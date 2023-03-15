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
                                <h1>آسن تامین کننده آهن آلات و انواع میلگرد آجدار و ساده</h1>
                                <p>
                                    آسن از مراجع معتبر در زمینه خرید و فروش و تامین آهن آلات از جمله انواع میلگردهای صنعتی و ساختمانی فعالیت می کند. تیم منسجم و متخصص آسن تلاش می کند محصولات را با کیفیتی برتر و قیمت مقرون به صرفه به مشتریان ارائه دهد. همکاری مستقیم با تولیدکنندگان معتبر مانند ذوب آهن اصفهان، فولاد خراسان، ظفر بناب و ... فرصتی ایجاد کرده که آسن به عنوان یکی مراکز مورد اعتماد حوزه آهن و میلگرد از نظر کیفیت و قیمت به شمار رود. ما نیز در همین راستا در صددیم با صداقت در عملکردمان و سرعت عمل باعث جلب رضایت مشتریان خود شویم.
                                    یکی از ماموریتهای مهم آسن اطلاع رسانی قیمت به روز آهن و میلگرد و تامین نیازها در داخل و خارج از کشور می باشد.

                                </p>
                                <h2>چرا انتخاب آسن؟</h2>
                                <p>
                                    هر روز قیمت میلگرد و آهن در سایت آسن برروزرسانی میشود تا منبع درست و به رروزی ازاعتماد از مهمترین سرمایه های کشور است. در دنیای تجارت اعتماد مشتریان بزرگترین سرمایه برای بقاء و موفقیت در کسب و کار محسوب می شود. تلاش آسن بر این است که این سرمایه حیاتی را حفظ کرده تا تجربه ای خوشایند  برای مشتریان به همراه داشته باشد.
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
                                <h2>قیمت روز میلگرد </h2>
                                <p>
                                    در بازار آهن  و فولاد عوامل متعددی مانند نوسانات نرخ ارز، تغییرات قیمت سنگ آهن و حتی در بعضی مواقع نرخ کرایه حمل بار باعث تاثیر در روند قیمت آهن آلات و میلگرد می شود.
                                    جهت سهولت در استعلام به روز قیمت، شرکت آسن با ایجاد درگاهی امن برای خرید آسان آهن آلات و میلگرد به همراه تیم فناوری اطلاعات و استفاده از کارشنان مجرب تحلیل گر در این زمینه، بستری را برای خرید آنلاین میلگرد و دیگر مقاطع فولادی ایجاد کرده است.
                                    لازم به ذکر است که به دلیل ارتباط مستقیم با تولید کنندگان مقاطع فولادی قیمت های ثبت شده در سایت پایین تر از قیمتهای اصلی بازار می باشد.
                                    در سایت آسن هر روز قیمت های میلگرد و دیگر مقاطع فولادی به روز می شود. قیمت گذاری در این شرکت توسط افراد خبره در زمینه فروش محصولات فولادی تعیین و با مناسب ترین قیمت به مشتریان ارائه می شود.

                                </p>
                            </div>
                            <div class="ct-widget ct-title">
                                <h2> مزیت­های خرید از آسن</h2>
                                <p>
                                    آسن به عنوان یکی از معتبرترین مراجع تامین میلگرد، علاوه بر خرید آسان مزیتهایی نیز برای مشتری به همراه دارد:
                                </p>
                                <br>
                                <ul>
                                    <li>
                                        <h5>تنوع در برند </h5>
                                    </li>
                                    <li>
                                        <h5>قیمت کارخانه و بدون واسطه</h5>
                                    </li>
                                    <li>
                                        <h5> تحویل سریع و به موقع</h5>
                                    </li>

                                    <li>
                                        <h5>ضمانت کیفیت  </h5>
                                    </li>
                                    <li>
                                        <h5>ارسال بار به هر نقطه از ایران </h5>
                                    </li>
                                    <li>
                                        <h5>پیگیری تا لحظه تحویل بار</h5>
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


    <section class="club-section spad" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.15); margin: 30px">
        <div class="container">
            <div class="club-content">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="cc-text">
                            <div class="ct-title">
                                <h2>پرفروش ترین محصولات </h2>
                                <p>
                                    میلگرد در استانداردها و سایزها مختف تولید می شود. با افزایش سایز میلگرد ، میزان ضخامت و مقاومت تسلیم  و در نهایت قیمت آن نیز افزایش می یابد.
                                    میلگرد سایز های 12،14،16 و 18 از پرمصرف ترین میلگردهای تولید شده می باشند.
                                    میلگرد سایز 12 و 14 در ساخت و سازهای ساختمانی سبک تر و میلگرد سایز 16 و 18 در پروژه های عمرانی سنگین تر مورد استفاده قرار میگیرند


                                </p>
                            </div>
                            <div class="ct-widget ct-title">
                                <p>
                                    هم  اکنون با پشتوانه شما همراهان، از معتبرترین مرجع خرید میلگرد با برترین کیفیت در سراسر کشور هستیم.
                                </p>

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
@endsection