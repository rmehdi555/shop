<!--Footer Start-->
<footer id="footer">
    <div class="fpart-first">
        <div class="container">
            <div class="row">
                <div class="contact col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5>{{__('web/public.contact_us')}}</h5>
                    <ul>
                        <li class="address"><i class="fa fa-map-marker"></i>{{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}</li>
                        <li class="mobile"><i class="fa fa-phone"></i>{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone"]->value)}}</li>
                        <li class="mobile"><i class="fa fa-phone"></i>{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}</li>
                        <li class="email"><i class="fa fa-envelope"></i>{{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}</a>
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h5>{{__('web/public.links')}}</h5>
                    <ul>
                        @foreach($webMenusFooter1Provider as $item)
                            <li><a href="{{$item->link}}">{{\App\Providers\MyProvider::_text($item->title)}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h5>{{__('web/public.user_service')}}</h5>
                    <ul>
                        @foreach($webMenusFooter2Provider as $item)
                            <li><a href="{{$item->link}}">{{\App\Providers\MyProvider::_text($item->title)}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fpart-second">
        <div class="container">
            <div id="powered" class="clearfix">
                {{--<div class="powered_text pull-left flip">--}}
                    {{--<p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش توسط <a href="https://mrcode.ir" target="_blank">مسترکد</a></p>--}}
                {{--</div>--}}
                {{--<div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>--}}
            {{--</div>--}}
            {{--<div class="bottom-row">--}}
                {{--<div class="custom-text text-center">--}}
                    {{--<p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>--}}
                {{--</div>--}}
                {{--<div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
</footer>
<!--Footer End-->

</div>