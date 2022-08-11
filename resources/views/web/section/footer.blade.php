<!-- Footer Section Begin -->
<footer class="footer-section set-bg" data-setbg="{{asset('web/2021/img/footer-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="fs-logo">
                    <h4>{{__('web/public.contact_us')}}</h4>
                    <ul>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:{{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}" class="call-phone"> {{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}</a></li>
                        <li><i class="fa fa-copy"></i> <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}" class="call-phone">{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}</a></li>
                        <li><i class="fa fa-copy"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["phone"]->value)}}</li>
                        <li><i class="fa fa-thumb-tack"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}</li>
                    </ul>
                    <div class="fs-social">
                        {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-tumblr"></i></a>--}}
                        {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--<a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["instagram"]->value)}}"><i class="fa fa-instagram" style="font-size:48px ;color:red;"></i></a>--}}
                        {{--<a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["whatsapp"]->value)}}"><i class="fa fa-whatsapp" style="font-size:48px ;color:green;"></i></a>--}}
                        {{--<a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["telegram"]->value)}}"><i class="fa fa-telegram" style="font-size:48px ;color:blue;"></i></a>--}}

                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                            <iframe src="https://map.ir/lat/35.767900/lng/51.415951/z/15" frameborder="0"
                                    style="border:0" allowfullscreen></iframe>
                        </div>v
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="fs-widget">
                    <h4>{{__('web/public.links')}}</h4>

                    <ul class="">
                        <li></li>
                        @foreach($webMenusFooter1Provider as $item)
                            <li><a href="{{$item->link}}" class="color-footer">{{\App\Providers\MyProvider::_text($item->title)}}</a></li>
                        @endforeach
                    </ul>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="fs-widget">
                    <h4>{{__('web/public.user_service')}}</h4>
                    @foreach($webMenusFooter2Provider as $item)
                        <div class="fw-item">
                            <h5><a href="{{$item->link}}" class="color-footer">{{\App\Providers\MyProvider::_text($item->title)}}</a></h5>
                        </div>

                    @endforeach
                    <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=237712&amp;Code=IWsjWV40oCJhi2g89rcg"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=237712&amp;Code=IWsjWV40oCJhi2g89rcg" alt="" style="cursor:pointer" id="IWsjWV40oCJhi2g89rcg"></a>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-option">
            <div class="row">
                <div class="col-lg-12">
                    <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://rmehdi555.ir" target="_blank">Rmehdi555</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="co-widget">
                        {{--<ul>--}}
                            {{--<li><a href="#">Copyright notification</a></li>--}}
                            {{--<li><a href="#">Terms of Use</a></li>--}}
                            {{--<li><a href="#">Privacy Policy</a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="fa fa-close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>



<div class="footerIcons" id="footerIcons" style="color: #fff;
    background-color: #dd1515;
    border-radius: 5px;">
    <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}" target="_blank" rel="nofollow" id="tellFooterIcon" class="tellFooterIcon"><i class="fa fa-phone"></i> <span style="color: white">{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_title"]->value)}}</span> </a>
</div>


<!-- Search model end -->




