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
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ route('web.contact.us.index') }}">{{__('web/public.contact_us')}}</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-9" >
                    <h1 class="title">{{__('web/public.contact_us')}}</h1>

                    <form class="form-horizontal" method="POST" action="{{ route('web.contact.us.insert') }}">
                        @csrf
                        <fieldset>
                            <h3 class="subtitle">{{__('web/messages.contact_us_title')}}</h3>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-name">{{__('web/public.name')}}</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="name" value="{{old('name')}}" id="input-name" class="form-control  @error('name') is-invalid @enderror" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-name">{{__('web/public.family')}}</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="family" value="{{old('family')}}" id="input-name" class="form-control  @error('family') is-invalid @enderror" />
                                    @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-email">آدرس ایمیل</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="email" name="email" value="{{ old('email') }}" id="input-email" class="form-control  @error('email') is-invalid @enderror" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-name">{{__('web/public.phone')}}</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" name="phone" value="{{old('phone')}}" id="input-name" class="form-control  @error('phone') is-invalid @enderror" />
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">{{__('web/public.body_contact_us')}}</label>
                                <div class="col-md-10 col-sm-9">
                                    <textarea name="body" rows="10" id="input-enquiry" class="form-control  @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">
                                <input type="submit" class="btn btn-primary" value="{{__('web/public.submit')}}">
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>


                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                        <iframe src="https://map.ir/lat/35.767900/lng/51.415951/z/15" frameborder="0"
                                style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <div class="list-group">
                        <h2 class="subtitle">{{__('web/public.contact_us_info')}}</h2>
                        <i class="fa fa-map-marker"></i>
                        <br>{{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}
                        <br>
                        <br>
                        <i class="fa fa-phone"></i>
                        <br>{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone"]->value)}}
                        <br>
                        <br>
                        <i class="fa fa-phone"></i>
                        <br>{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}
                        <br>
                        <br>
                        <i class="fa fa-envelope"></i>
                        <br>{{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}
                        <br>
                        <br><br>





                        <div class="ht-links">
                            <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}"
                               target="_blank" title="تماس با آسن"><i
                                        class="fa fa-phone" style="font-size:32px ;color:green;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["instagram"]->value)}}"
                               target="_blank" title="اینستاگرام آسن"><i
                                        class="fa fa-instagram " style="font-size:32px ;color:red;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["whatsapp"]->value)}}"
                               target="_blank" title="واتس آپ آسن"><i
                                        class="fa fa-whatsapp" style="font-size:32px ;color:green;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["telegram"]->value)}}"
                               target="_blank" title="تلگرام آسن"><i
                                        class="fa fa-telegram" style="font-size:32px ;color:blue;"></i></a>
                            <a href="https://www.youtube.com/watch?v=jAAoW8qDdx8"
                               target="_blank" title="یوتیوب آسن"><i
                                        class="fa fa-youtube-play" style="font-size:32px ;color:red;"></i></a>
                            <a href="https://twitter.com/assen_ir"
                               target="_blank" title="تویتر آسن"><i
                                        class="fa fa-twitter-square" style="font-size:32px ;color:blue;"></i></a>

                        </div>

                    </div>
                    <div class="banner owl-carousel">

                    </div>
                </aside>

                <!--Middle Part End -->
            </div>
        </div>
    </div>

@endsection