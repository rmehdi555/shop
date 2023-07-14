@php if(!isset($SID)) $SID=10;@endphp
<div id="leftsidebar" class="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 65px);">
        <div class="sidebar-scroll" style="overflow: hidden; width: auto; height: calc(100vh - 65px);">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">{{__('admin/public.main')}}</li>
                    <li><a href="{{ route('admin.panel') }}"><i
                                    class="icon-home"></i><span>{{__('admin/public.dashboard')}}</span></a></li>
                    {{--@if($user->type=='admin')--}}
                    {{--<li class="@if($SID>=10 and $SID<20) active @endif">--}}
                        {{--<a href="#news_categories" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>{{__('admin/public.news_categories')}}</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==10 ) active @endif"><a--}}
                                        {{--href="{{ route('newsCategories.index',['SID' => '10']) }}">{{__('admin/public.news_categories_list')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==11 ) active @endif"><a--}}
                                        {{--href="{{ route('newsCategories.create',['SID' => '11']) }}">{{__('admin/public.news_categories_add')}}</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    {{--@if($user->type=='admin')--}}
                    {{--<li class="@if($SID>=20 and $SID<30) active @endif">--}}
                        {{--<a href="#news" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>اخبار و مقالات</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==20 ) active @endif"><a--}}
                                        {{--href="{{ route('news.index',['SID' => '20','type' => 'news']) }}">{{__('admin/public.news_list')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==21 ) active @endif"><a--}}
                                        {{--href="{{ route('news.create',['SID' => '21','type' => 'news']) }}">{{__('admin/public.news_add')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==22 ) active @endif"><a--}}
                                        {{--href="{{ route('news.index',['SID' => '22','type' => 'article']) }}">لیست مقالات</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==23 ) active @endif"><a--}}
                                        {{--href="{{ route('news.create',['SID' => '23','type' => 'article']) }}">اضافه مقاله جدید</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    @if($user->type=='admin' or $user->type=='product')
                    <li class="@if($SID>=900 and $SID<1000) active @endif">
                        <a href="#site-setting" class="has-arrow"><i
                                    class="icon-diamond"></i><span>{{__('admin/public.site_settings')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            @endif
                            @if($user->type=='admin')
                            <li class="@if($SID==900 ) active @endif"><a
                                        href="{{ route('siteDetails.index',['SID' => '900']) }}">{{__('admin/public.site_settings_list')}}</a>
                            </li>
                            <li class="@if($SID==901 ) active @endif"><a
                                        href="{{ route('siteDetails.create',['SID' => '901']) }}">{{__('admin/public.site_settings_add')}}</a>
                            </li>
                            <li class="@if($SID==902 ) active @endif"><a
                                        href="{{ route('contactUs.index',['SID' => '902']) }}">{{__('admin/public.contact_us_list')}}</a>
                            </li>
                            <li class="@if($SID==903 ) active @endif"><a
                                        href="{{ route('complaint.index',['SID' => '903']) }}">{{__('admin/public.complaint_list')}}</a>
                            </li>
                            @endif
                            @if($user->type=='admin' or $user->type=='product')
                            <li class="@if($SID==904 ) active @endif"><a
                                        href="{{ route('currencyConvert.index',['SID' => '904']) }}">{{__('admin/public.currency_convert_list')}}</a>
                            </li>
                            @endif
                            @if($user->type=='admin')
                            <li class="@if($SID==905 ) active @endif"><a
                                        href="{{ route('usersList.index',['SID' => '905']) }}">{{__('admin/public.users_list')}}</a>
                            </li>
                            <li class="@if($SID==906 ) active @endif"><a
                                        href="{{ route('admin.payments.index',['SID' => '906']) }}">{{__('admin/public.payments_list')}}</a>
                            </li>
                            @endif
                            @if($user->type=='admin' or $user->type=='product')
                        </ul>
                    </li>
                    @endif
                    {{--@if($user->type=='admin')--}}

                    {{--<li class="@if($SID>=100 and $SID<200) active @endif">--}}
                        {{--<a href="#slider" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>{{__('admin/public.slider')}}</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==100 ) active @endif"><a--}}
                                        {{--href="{{ route('slider.index',['SID' => '100']) }}">{{__('admin/public.slider_list')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==101 ) active @endif"><a--}}
                                        {{--href="{{ route('slider.create',['SID' => '101']) }}">{{__('admin/public.slider_add')}}</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    @if($user->type=='admin' or $user->type=='product')
                    <li class="@if($SID>=200 and $SID<300) active @endif">
                        <a href="#products" class="has-arrow"><i
                                    class="icon-diamond"></i><span>{{__('admin/public.products')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="@if($SID==200 ) active @endif"><a
                                        href="{{ route('products.index',['SID' => '200']) }}">{{__('admin/public.products_list')}}</a>
                            </li>
                            <li class="@if($SID==201 ) active @endif"><a
                                        href="{{ route('products.create',['SID' => '201']) }}">{{__('admin/public.product_add')}}</a>
                            </li>
                            <li class="@if($SID==202 ) active @endif"><a
                                        href="{{ route('factory.index',['SID' => '202']) }}">{{__('admin/public.factory_list')}}</a>
                            </li>
                            <li class="@if($SID==204 ) active @endif"><a
                                        href="{{ route('size.index',['SID' => '204']) }}">{{__('admin/public.size_list')}}</a>
                            </li>
                            <li class="@if($SID==206 ) active @endif"><a
                                        href="{{ route('standard.index',['SID' => '206']) }}">{{__('admin/public.standard_list')}}</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if($user->type=='admin' or $user->type=='product')


                    <li class="@if($SID>=300 and $SID<400) active @endif">
                        <a href="#product_categories" class="has-arrow"><i
                                    class="icon-diamond"></i><span>{{__('admin/public.product_categories')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="@if($SID==300 ) active @endif"><a
                                        href="{{ route('productCategories.index',['SID' => '300']) }}">{{__('admin/public.product_categories_list')}}</a>
                            </li>
                            <li class="@if($SID==301 ) active @endif"><a
                                        href="{{ route('productCategories.create',['SID' => '301']) }}">{{__('admin/public.product_categories_add')}}</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if($user->type=='admin')

                    <li class="@if($SID>=400 and $SID<500) active @endif">
                        <a href="#page" class="has-arrow"><i
                                    class="icon-diamond"></i><span>{{__('admin/public.web_pages')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="@if($SID==400 ) active @endif"><a
                                        href="{{ route('webPages.index',['SID' => '400']) }}">{{__('admin/public.web_pages_list')}}</a>
                            </li>
                            <li class="@if($SID==401 ) active @endif"><a
                                        href="{{ route('webPages.create',['SID' => '401']) }}">{{__('admin/public.web_pages_add')}}</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    {{--@if($user->type=='admin')--}}
                    {{--<li class="@if($SID>=500 and $SID<600) active @endif">--}}
                        {{--<a href="#menus" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>{{__('admin/public.menus')}}</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==500 ) active @endif"><a--}}
                                        {{--href="{{ route('menus.index',['SID' => '500']) }}">{{__('admin/public.menus_list')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==501 ) active @endif"><a--}}
                                        {{--href="{{ route('menus.create',['SID' => '501']) }}">{{__('admin/public.menus_add')}}</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    {{--@if($user->type=='admin')--}}
                    {{--<li class="@if($SID>=700 and $SID<800) active @endif">--}}
                        {{--<a href="#menu_categories" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>{{__('admin/public.menu_categories')}}</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==700 ) active @endif"><a--}}
                                        {{--href="{{ route('menuCategories.index',['SID' => '700']) }}">{{__('admin/public.menu_categories_list')}}</a>--}}
                            {{--</li>--}}
                            {{--<li class="@if($SID==701 ) active @endif"><a--}}
                                        {{--href="{{ route('menuCategories.create',['SID' => '701']) }}">{{__('admin/public.menu_categories_add')}}</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    @if($user->type=='admin')

                    {{--<li class="@if($SID>=1000 and $SID<1010) active @endif">--}}
                        {{--<a href="#site-setting" class="has-arrow"><i--}}
                                    {{--class="icon-diamond"></i><span>تست ها</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse">--}}
                            {{--<li class="@if($SID==900 ) active @endif"><a--}}
                                        {{--href="{{ route('admin.test.irandargah.index',['SID' => '1001']) }}">تست درگاه--}}
                                    {{--پرداخت ایران درگاه</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    @endif
                    <li><a href="{{ route('logout') }}"><i
                                    class="icon-logout"></i><span>{{__('admin/public.logout')}}</span></a></li>


                </ul>
            </nav>
        </div>
        <div class="slimScrollBar"
             style="background: rgb(239, 239, 239); width: 2px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 3px; z-index: 99; right: 1px; height: 37.3737px;"></div>
        <div class="slimScrollRail"
             style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>