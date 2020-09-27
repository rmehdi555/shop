
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                {{--<li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>--}}
                                {{--<li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>--}}
                                {{--<li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>--}}
                                    {{--<div class="dropdown-menu custom_block">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<table>--}}
                                                    {{--<tbody>--}}
                                                    {{--<tr>--}}
                                                        {{--<td><img alt="" src="image/banner/cms-block.jpg"></td>--}}
                                                        {{--<td><img alt="" src="image/banner/responsive.jpg"></td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td><h4>بلاک های محتوا</h4></td>--}}
                                                        {{--<td><h4>قالب واکنش گرا</h4></td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>--}}
                                                        {{--<td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>--}}
                                                        {{--<td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>--}}
                                                    {{--</tr>--}}
                                                    {{--</tbody>--}}
                                                {{--</table>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">لیست علاقه مندی (0)</a></li>--}}
                                {{--<li><a href="checkout.html">تسویه حساب</a></li>--}}
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> {{__('web/public.lang_name_'.App::getLocale())}} <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                {{--<li>--}}
                                    {{--<a class="btn btn-link btn-block language-select" href="{{ route('web.change.lang','en') }}" type="button" name="GB"><img src="{{asset('web/2020/image/flags/en.png')}}" alt="{{__('web/public.lang_name_en')}}" title="{{__('web/public.lang_name_en')}}" /> {{__('web/public.lang_name_en')}}</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a class="btn btn-link btn-block language-select" href="{{ route('web.change.lang','fa') }}" type="button" name="GB"><img src="{{asset('web/2020/image/flags/fa.png')}}" alt="{{__('web/public.lang_name_fa')}}" title="{{__('web/public.lang_name_fa')}}" /> {{__('web/public.lang_name_fa')}}</a>
                                </li>
                                {{--<li>--}}
                                    {{--<button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> {{__('web/public.currency_name_'.session('Local_Currency'))}} <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="currency-select btn btn-link btn-block" href="{{ route('web.change.currency','EUR') }}" type="button" name="EUR">€ Euro</a>
                                </li>
                                <li>
                                    <a class="currency-select btn btn-link btn-block" href="{{ route('web.change.currency','IRR') }}" type="button" name="IRR">{{__('web/public.currency_name_IRR')}} IRR</a>
                                </li>
                                <li>
                                    <a class="currency-select btn btn-link btn-block" href="{{ route('web.change.currency','USD') }}" type="button" name="USD">$ USD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        @if(auth()->check())
                            <ul>
                                <li><a href="{{ route('home') }}">{{auth()->user()->name}} {{auth()->user()->family}}</a></li>
                                <li><a href="{{ route('logout') }}">{{__('web/public.btn_logout')}}</a></li>
                            </ul>

                        @else
                            <ul>
                                <li><a href="{{ route('login') }}">{{__('web/public.btn_login')}}</a></li>
                                <li><a href="{{ route('register') }}"> {{__('web/public.btn_register')}}</a></li>
                            </ul>
                        @endif


                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="{{ route('web.home') }}"><img class="img-responsive" src="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                {{--<span id="cart-total">2 آیتم - 132000 تومان</span></button>--}}
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        {{--<tr>--}}
                                            {{--<td class="text-center"><a href="product.html"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="image/product/sony_vaio_1-50x50.jpg"></a></td>--}}
                                            {{--<td class="text-left"><a href="product.html">کفش راحتی مردانه</a></td>--}}
                                            {{--<td class="text-right">x 1</td>--}}
                                            {{--<td class="text-right">32000 تومان</td>--}}
                                            {{--<td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td class="text-center"><a href="product.html"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="image/product/samsung_tab_1-50x50.jpg"></a></td>--}}
                                            {{--<td class="text-left"><a href="product.html">تبلت ایسر</a></td>--}}
                                            {{--<td class="text-right">x 1</td>--}}
                                            {{--<td class="text-right">98000 تومان</td>--}}
                                            {{--<td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right">132000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">4000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">11880 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right">139880 تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->



        <!-- Main آقایانu Start-->
        <div class="container">
            <nav id="menu" class="navbar">
                <div class="navbar-header"> <span class="visible-xs visible-sm"> {{__('web/public.menu')}} <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="{{__('web/public.home')}}" href="{{ route('web.home') }}"><span>{{__('web/public.home')}}</span></a></li>
                        <li class="mega-menu dropdown"><a> {{__('web/public.categories')}}</a>
                            <div class="dropdown-menu">
                                @foreach($categoriesProvider as $category)
                                    @if($category->parent_id==0)
                                        <div class="column col-lg-2 col-md-3"><a href="{{ route('web.show.category',$category->id) }}">{{\App\Providers\MyProvider::_text($category->title)}}</a>
                                            <div>
                                                <ul>
                                                    @if(isset($category->children[0]) and$category->children!=[])
                                                        <x-web-show-categories :categories="$category->children">
                                                        </x-web-show-categories>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">test</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">test1</a></div>--}}
                                {{--<div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">test2</a></div>--}}
                            </div>
                        </li>
                        {{--<li class="custom-link"><a href="#">لینک های دلخواه</a></li>--}}
                        {{--<li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>--}}
                        {{--<div class="dropdown-menu custom_block">--}}
                        {{--<ul>--}}
                        {{--<li>--}}
                        {{--<table>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                        {{--<td><img alt="" src="image/banner/cms-block.jpg"></td>--}}
                        {{--<td><img alt="" src="image/banner/responsive.jpg"></td>--}}
                        {{--<td><img alt="" src="image/banner/cms-block.jpg"></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td><h4>بلاک های محتوا</h4></td>--}}
                        {{--<td><h4>قالب واکنش گرا</h4></td>--}}
                        {{--<td><h4>پشتیبانی ویژه</h4></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>--}}
                        {{--<td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>--}}
                        {{--<td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>--}}
                        {{--<td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>--}}
                        {{--<td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                        {{--</table>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown information-link"><a>برگه ها</a>--}}
                        {{--<div class="dropdown-menu">--}}
                        {{--<ul>--}}
                        {{--<li><a href="login.html">ورود</a></li>--}}
                        {{--<li><a href="register.html">ثبت نام</a></li>--}}
                        {{--<li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>--}}
                        {{--<li><a href="product.html">محصولات</a></li>--}}
                        {{--<li><a href="cart.html">سبد خرید</a></li>--}}
                        {{--<li><a href="checkout.html">تسویه حساب</a></li>--}}
                        {{--<li><a href="compare.html">مقایسه</a></li>--}}
                        {{--<li><a href="wishlist.html">لیست آرزو</a></li>--}}
                        {{--<li><a href="search.html">جستجو</a></li>--}}
                        {{--</ul>--}}
                        {{--<ul>--}}
                        {{--<li><a href="about-us.html">درباره ما</a></li>--}}
                        {{--<li><a href="404.html">404</a></li>--}}
                        {{--<li><a href="elements.html">عناصر</a></li>--}}
                        {{--<li><a href="faq.html">سوالات متداول</a></li>--}}
                        {{--<li><a href="sitemap.html">نقشه سایت</a></li>--}}
                        {{--<li><a href="contact-us.html">تماس با ما</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="#"><a href="contact-us.html">تماس با ما</a></li>--}}

                    </ul>
                </div>
            </nav>
        </div>
        <!-- Main آقایانu End-->
    </div>
    <div id="container">
        <!-- Feature Box Start-->
        <div class="container">
            <div class="custom-feature-box row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_1">
                        <div class="title">ارسال رایگان</div>
                        <p>برای خرید های بیش از 500 هزار تومان</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_2">
                        <div class="title">assen</div>
                        <p>به زودی راه اندازی خواهد شد ...</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_3">
                        <div class="title">تخفیف ویژه</div>
                        <p>بهترین هدیه شما</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_4">
                        <div class="title">امتیازات خرید</div>
                        <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Box End-->
        <div class="container">
            <div class="row">
                <!-- Left Part Start-->
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle"> {{__('web/public.categories')}}</h3>
                    <div class="box-category">
                        <ul id="cat_accordion">
                            @foreach($categoriesProvider as $category)
                                @if($category->parent_id==0)
                                    <li><a href="{{ route('web.show.category',$category->id) }}">{{\App\Providers\MyProvider::_text($category->title)}}
                                            @if(isset($category->children[0]) and $category->children!=[])</a><span class="down"></span>
                                        <ul>
                                            <x-web-show-categories-sidebar :categories="$category->children">
                                            </x-web-show-categories-sidebar>
                                        </ul>
                                        @else
                                        </a>
                                        @endif
                                    </li>
                                @endif
                            @endforeach


                        </ul>


                    </div>
                    @if(isset($specialProducts))
                        <h3 class="subtitle">{{__('web/public.product_vip')}}</h3>
                        @foreach($specialProducts as $product)
                            <div class="side-item">
                                <div class="product-thumb clearfix">
                                    <div class="image"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["50"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}} " class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></h4>
                                        <p class="price"> <span class="price-new">{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> @if($product->discount>0)<span class="price-old">{{\App\Providers\MyProvider::exToLocal($product->price)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> <span class="saving">-{{$product->discount}}%</span> @endif</p>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @endif

                    @if(isset($newProducts))
                        <h3 class="subtitle">{{__('web/public.product_new')}}</h3>
                        @foreach($newProducts as $product)
                            <div class="side-item">
                                <div class="product-thumb clearfix">
                                    <div class="image"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["50"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}} " class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></h4>
                                        <p class="price"> <span class="price-new">{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> @if($product->discount>0)<span class="price-old">{{\App\Providers\MyProvider::exToLocal($product->price)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> <span class="saving">-{{$product->discount}}%</span> @endif</p>
                                    </div>
                                </div>

                            </div>

@endforeach
@endif
                </aside>
