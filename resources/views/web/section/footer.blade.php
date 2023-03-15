<!-- Footer Section Begin -->
<footer class="footer-section set-bg" data-setbg="{{asset('web/2021/img/footer-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="fs-logo">
                    <span>{{__('web/public.contact_us')}}</span>
                    <address>
                        <ul>
                            <li><i class="fa fa-envelope"></i> <a  href="mailto:mail@assen.ir"
                                                                  class="call-phone"> {{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}</a>
                            </li>
                            <li><i class="fa fa-copy"></i> <a
                                        href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}"
                                        class="call-phone">{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}</a>
                            </li>
                            <li>
                                <i class="fa fa-copy">   </i>
                                <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}" target="_blank"
                                       rel="nofollow" ><i class="fa fa-phone"></i> <span
                                                >{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_title"]->value)}} : {{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}</span>
                                    </a>

                            </li>
                            <li>
                                <i class="fa fa-thumb-tack"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}
                            </li>
                        </ul>
                    </address>

                    <div class="fs-social">

                            <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}"
                               target="_blank" title="تماس با آسن"><i
                                        class="fa fa-phone" style="font-size:32px ;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["instagram"]->value)}}"
                               target="_blank" title="اینستاگرام آسن"><i
                                        class="fa fa-instagram " style="font-size:32px ;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["whatsapp"]->value)}}"
                               target="_blank" title="واتس آپ آسن"><i
                                        class="fa fa-whatsapp" style="font-size:32px ;"></i></a>
                            <a href="{{\App\Providers\MyProvider::_text($siteDetailsProvider["telegram"]->value)}}"
                               target="_blank" title="تلگرام آسن"><i
                                        class="fa fa-telegram" style="font-size:32px ;;"></i></a>
                            <a href="https://www.youtube.com/watch?v=jAAoW8qDdx8"
                               target="_blank" title="یوتیوب آسن"><i
                                        class="fa fa-youtube-play" style="font-size:32px ;"></i></a>
                            <a href="https://twitter.com/assen_ir"
                               target="_blank" title="تویتر آسن"><i
                                        class="fa fa-twitter-square" style="font-size:32px ;"></i></a>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="fs-widget">
                    <span>{{__('web/public.links')}}</span>

                    <ul class="">
                        <li></li>
                        @foreach($webMenusFooter1Provider as $item)
                            <li><a href="{{$item->link}}"
                                   class="color-footer">{{\App\Providers\MyProvider::_text($item->title)}}</a></li>
                        @endforeach
                    </ul>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="fs-widget">
                    <span>{{__('web/public.user_service')}}</span>
                    @foreach($webMenusFooter2Provider as $item)
                        <div class="fw-item">
                            <h5><a href="{{$item->link}}"
                                   class="color-footer">{{\App\Providers\MyProvider::_text($item->title)}}</a></h5>
                        </div>

                    @endforeach
                    <a referrerpolicy="origin" target="_blank"
                       href="https://trustseal.enamad.ir/?id=237712&amp;Code=IWsjWV40oCJhi2g89rcg"><img
                                referrerpolicy="origin"
                                src="{{config('app.url').'/web/2021/img/enamad.png'}}"
                                alt="اینماد آسن" style="cursor:pointer; max-height: 150px;" id="IWsjWV40oCJhi2g89rcg"></a>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-option">
            <div class="row">
                <div class="col-lg-12">
                    <div class="co-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                        by <a href="https://rmehdi555.ir" target="_blank">Rmehdi555</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
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


<div class="rounded-circle footerIcons" id="footerIcons" style="color: #fff;
    background-color: #dd1515;
float: right;
padding: 10px;
max-width: 70px">
    <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}" target="_blank"
       rel="nofollow" id="tellFooterIcon" class="tellFooterIcon"> <span
                style="color: white;"><i
                    class="fa fa-phone" style="font-size:32px ;"></i> </span>
    </a>
</div>


<!-- Search model end -->




