@extends('web.master')
@section('meta')
    <title> قیمت روز آهن آلات | شرکت آسن </title>
    <meta name="description"
          content="شرکت آسن : قیمت میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات  "/>
    <meta property="og:title" content="  قیمت روز آهن آلات | شرکت اسن"/>
    <meta property="og:description"
          content="شرکت آسن : قیمت میلگرد + آهن + تیرآهن + فولاد + قیمت روز آهن آلات "/>

    <meta name="keywords"
          content="آسن, assen, قیمت آهن,شرکت آسن,قیمت میلگرد,کمترین قیمت میلگرد, بازار آهن , قیمت فلزات,قیمت تیرآهن,قیمت لوله آهنی,قیمت نبشی">
@endsection
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Latest Section Begin -->

    <section class="latest-section">
        <div class="container">
            <div class="row">
                <aside id="column-center" class="col-sm-6 hidden-xs">
                    <div class="list-group">
                        <h2 class="subtitle">نتیجه پرداخت آنلاین</h2>
                        @if($result->status==100)
                            <label style="color: green">تراکنش با موفقیت ثبت شد</label>
                        @else
                            #dd1515
                        @endif
                        <br>پیغام : {{$result->message}}
                        <br>
                        <br>
                        <br>کد پیگیری : {{$result->refId}}
                        <br>
                        <br>
                    </div>
                    <div class="banner owl-carousel">
                        <a class="btn btn-info" href="{{ route('buyer.payments.index') }}">بازگشت به لیست پرداختی ها</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>
    <!-- Latest Section End -->

@endsection