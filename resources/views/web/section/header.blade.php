<body dir="rtl">
@include('sweet::alert')


<!-- Offcanvas Menu Section Begin -->
{{--<div class="offcanvas-menu-overlay"></div>--}}
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>

    <div class="header__top--canvas">
        <div class="ht-info">
            <ul>
                <li>@php $v=Verta::now(); echo($v->formatWord('l').' '.$v->format('d').' '.$v->formatWord('F').' '.$v->format('Y'));@endphp</li>
            </ul>
        </div>
        <div class="ht-links">

        </div>
    </div>


    {{--<ul class="main-menu mobile-menu">--}}
    {{--@foreach($webMenusHeaderProvider as $menu)--}}
    {{--@if($menu->parent_id==0 AND !isset($menu->children[0]))--}}
    {{--<li class="{{ \App\Providers\MyProvider::activeSidebar($menu->link) }}"><a--}}
    {{--href="{{ $menu->link }}">{{\App\Providers\MyProvider::_text($menu->title)}}</a></li>--}}
    {{--@endif--}}
    {{--@if($menu->parent_id==0 AND isset($menu->children[0]))--}}
    {{--<li>{{\App\Providers\MyProvider::_text($menu->title)}}--}}
    {{--@if(isset($menu->children[0]) and $menu->children!=[])--}}
    {{--<ul class="dropdown">--}}
    {{--<x-web-show-menus :menus="$menu->children">--}}
    {{--</x-web-show-menus>--}}
    {{--</ul>--}}
    {{--@endif--}}
    {{--</li>--}}
    {{--@endif--}}
    {{--@endforeach--}}

    {{--<li>{{__('web/public.lang_name_'.App::getLocale())}}--}}
    {{--<ul class="dropdown">--}}
    {{--<li>--}}
    {{--<a class="btn btn-link btn-block language-select" href="{{ route('web.change.lang','fa') }}"><img--}}
    {{--src="{{asset('web/2020/image/flags/fa.png')}}" alt="{{__('web/public.lang_name_fa')}}"--}}
    {{--title="{{__('web/public.lang_name_fa')}}"/> {{__('web/public.lang_name_fa')}}</a>--}}
    {{--</li>--}}

    {{--</ul>--}}
    {{--</li>--}}

    {{--<li>{{__('web/public.currency_name_'.session('Local_Currency'))}}--}}
    {{--<ul class="dropdown">--}}
    {{--<li>--}}
    {{--<a href="{{ route('web.change.currency','EUR') }}" name="EUR">€ Euro</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="{{ route('web.change.currency','IRR') }}" name="IRR">{{__('web/public.currency_name_IRR')}}--}}
    {{--IRR</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="{{ route('web.change.currency','USD') }}" name="USD">$ USD</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<div id="mobile-menu-wrap"></div>--}}
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="{{ route('web.home') }}"><img style="width: 10rem;"
                                                                   src="{{asset($siteDetailsProvider["image_logo"]->images["images"]["original"])}}"
                                                                   alt="لوگو آسن"></a>
                        </div>
                        <div class="ht-links">

                        </div>
                        <div class="ht-info">
                            <ul>
                                <li>@php $v=Verta::now();  echo($v->formatWord('l').' '.$v->format('d').' '.$v->formatWord('F').' '.$v->format('Y'));@endphp</li>


                            </ul>
                        </div>

                        {{--<div class="canvas-open">--}}
                        {{--<i class="fa fa-bars" style="color: #dd1515;"></i>--}}
                        {{--</div>--}}

                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item color-white">
                    <a class="nav-link" href="{{env('APP_URL')}}">
                        صفحه اصلی
                    </a>
                </li>
                <li class="nav-item color-white">
                    <a class="nav-link" href="https://mag.assen.ir/">
                        مجله
                    </a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="megaMenuDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        میلگرد
                    </a>
                    <div class="dropdown-menu" aria-labelledby="megaMenuDropdown">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>کارخانه</h5>
                                @foreach($webMenusHeaderMilegerd['factory'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.factory',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>سایز</h5>
                                @foreach($webMenusHeaderMilegerd['size'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.size',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>استاندارد</h5>
                                @foreach($webMenusHeaderMilegerd['standard'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.standard',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="megaMenuDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        نبشی
                    </a>
                    <div class="dropdown-menu" aria-labelledby="megaMenuDropdown">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>کارخانه</h5>
                                @foreach($webMenusHeaderNabshi['factory'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.factory',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>سایز</h5>
                                @foreach($webMenusHeaderNabshi['size'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.size',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>استاندارد</h5>
                                @foreach($webMenusHeaderNabshi['standard'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.standard',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="megaMenuDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ورق سیاه
                    </a>
                    <div class="dropdown-menu" aria-labelledby="megaMenuDropdown">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>کارخانه</h5>
                                @foreach($webMenusHeaderVaraghSiea['factory'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.factory',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>سایز</h5>
                                @foreach($webMenusHeaderVaraghSiea['size'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.size',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h5>استاندارد</h5>
                                @foreach($webMenusHeaderVaraghSiea['standard'] as $item)
                                    <a class="dropdown-item" href="{{ route('web.show.standard',$item->slug) }}">{{$item->title}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item color-white">
                    <a class="nav-link" href="https://assen.ir/about_us">
                        درباره ما
                    </a>
                </li>
                <li class="nav-item color-white">
                    <a class="nav-link" href="https://assen.ir/contact-us">
                        تماس با ما
                    </a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="megaMenuDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('web/public.currency_name_'.session('Local_Currency'))}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="megaMenuDropdown">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="dropdown-item" href="{{ route('web.change.currency','EUR') }}" name="EUR">€
                                    Euro</a>
                            </div>
                            <div class="col-md-4">
                                <a class="dropdown-item" href="{{ route('web.change.currency','IRR') }}"
                                   name="IRR">{{__('web/public.currency_name_IRR')}} IRR</a>
                            </div>
                            <div class="col-md-4">
                                <a class="dropdown-item" href="{{ route('web.change.currency','USD') }}" name="USD">$
                                    USD</a>

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</header>
<!-- Header End -->
