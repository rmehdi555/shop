<body dir="rtl">
@include('sweet::alert')


<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>

    <div class="header__top--canvas">
        <div class="ht-info">
            <ul>
                <li>@php $v=Verta::now(); echo($v->formatWord('l').' '.$v->format('d').' '.$v->formatWord('F').' '.$v->format('Y'));@endphp</li>
                @if(auth()->check())

                    <li><a href="{{ route('home') }}">{{auth()->user()->name}} {{auth()->user()->family}}</a></li>
                    <li><a href="{{ route('logout') }}">{{__('web/public.btn_logout')}}</a></li>


                @else

                    <li><a href="{{ route('login') }}">{{__('web/public.btn_login')}}</a></li>
                    <li><a href="{{ route('register') }}"> {{__('web/public.btn_register')}}</a></li>

                @endif
            </ul>
        </div>
        <div class="ht-links">
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


    <ul class="main-menu mobile-menu">
        @foreach($webMenusHeaderProvider as $menu)
            @if($menu->parent_id==0 AND !isset($menu->children[0]))
                <li class="{{ \App\Providers\MyProvider::activeSidebar($menu->link) }}"><a
                            href="{{ $menu->link }}">{{\App\Providers\MyProvider::_text($menu->title)}}</a></li>
            @endif
            @if($menu->parent_id==0 AND isset($menu->children[0]))
                <li>{{\App\Providers\MyProvider::_text($menu->title)}}
                    @if(isset($menu->children[0]) and $menu->children!=[])
                        <ul class="dropdown">
                            <x-web-show-menus :menus="$menu->children">
                            </x-web-show-menus>
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach

        <li>{{__('web/public.lang_name_'.App::getLocale())}}
            <ul class="dropdown">
                <li>
                    <a class="btn btn-link btn-block language-select" href="{{ route('web.change.lang','fa') }}"><img
                                src="{{asset('web/2020/image/flags/fa.png')}}" alt="{{__('web/public.lang_name_fa')}}"
                                title="{{__('web/public.lang_name_fa')}}"/> {{__('web/public.lang_name_fa')}}</a>
                </li>

            </ul>
        </li>

        <li>{{__('web/public.currency_name_'.session('Local_Currency'))}}
            <ul class="dropdown">
                <li>
                    <a href="{{ route('web.change.currency','EUR') }}" name="EUR">€ Euro</a>
                </li>
                <li>
                    <a href="{{ route('web.change.currency','IRR') }}" name="IRR">{{__('web/public.currency_name_IRR')}}
                        IRR</a>
                </li>
                <li>
                    <a href="{{ route('web.change.currency','USD') }}" name="USD">$ USD</a>
                </li>
            </ul>
        </li>
    </ul>
    <div id="mobile-menu-wrap"></div>
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
                        <div class="ht-info">
                            <ul>
                                <li>@php $v=Verta::now();  echo($v->formatWord('l').' '.$v->format('d').' '.$v->formatWord('F').' '.$v->format('Y'));@endphp</li>

                                @if(auth()->check())

                                    @if(auth()->user()->isAdmin())
                                        <li><a href="{{ route('admin.panel') }}">{{__('web/public.panel')}}</a></li>
                                    @else
                                        <li><a href="{{ route('user.panel') }}">{{__('web/public.panel')}}</a></li>
                                    @endif
                                    <li><a href="{{ route('logout') }}">{{__('web/public.btn_logout')}}</a></li>


                                @else

                                    <li><a href="{{ route('login') }}">{{__('web/public.btn_login')}}</a></li>
                                    <li><a href="{{ route('register') }}"> {{__('web/public.btn_register')}}</a></li>

                                @endif

                            </ul>
                        </div>

                        <div class="canvas-open">
                            <i class="fa fa-bars" style="color: #dd1515;"></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header__nav">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="nav-menu">
                        <ul class="main-menu">
                            @foreach($webMenusHeaderProvider as $menu)
                                @if($menu->parent_id==0 AND !isset($menu->children[0]))
                                    <li class="{{ \App\Providers\MyProvider::activeSidebar($menu->link) }}"><a
                                                href="{{ $menu->link }}">{{\App\Providers\MyProvider::_text($menu->title)}}</a>
                                    </li>
                                @endif
                                @if($menu->parent_id==0 AND isset($menu->children[0]))
                                    <li>
                                        <a href="{{ $menu->link }}">{{\App\Providers\MyProvider::_text($menu->title)}}</a>
                                        @if(isset($menu->children[0]) and $menu->children!=[])
                                            <div class="dropdown">
                                                <ul>
                                                    <x-web-show-menus :menus="$menu->children">
                                                    </x-web-show-menus>
                                                </ul>
                                            </div>
                                        @endif
                                    </li>
                                @endif
                            @endforeach

                            <li><a href="#">{{__('web/public.lang_name_'.App::getLocale())}}  </a>
                                <ul class="dropdown">
                                    <li>
                                        <a class="btn btn-link btn-block language-select"
                                           href="{{ route('web.change.lang','fa') }}"><img
                                                    src="{{asset('web/2020/image/flags/fa.png')}}"
                                                    alt="{{__('web/public.lang_name_fa')}}"
                                                    title="{{__('web/public.lang_name_fa')}}"/> {{__('web/public.lang_name_fa')}}
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a href="#">{{__('web/public.currency_name_'.session('Local_Currency'))}} </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('web.change.currency','EUR') }}" name="EUR">€ Euro</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.change.currency','IRR') }}"
                                           name="IRR">{{__('web/public.currency_name_IRR')}} IRR</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.change.currency','USD') }}" name="USD">$ USD</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header End -->
