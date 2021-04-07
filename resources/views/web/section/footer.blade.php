<!-- Footer Section Begin -->
<footer class="footer-section set-bg" data-setbg="{{asset('web/2021/img/footer-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="fs-logo">
                    <h4>{{__('web/public.contact_us')}}</h4>
                    <ul>
                        <li><i class="fa fa-envelope"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}</li>
                        <li><i class="fa fa-copy"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}</li>
                        <li><i class="fa fa-thumb-tack"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}</li>
                    </ul>
                    <div class="fs-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-1">
                <div class="fs-widget">
                    <h4>{{__('web/public.links')}}</h4>
                    <ul class="fw-links">
                        @foreach($webMenusFooter1Provider as $item)
                            <li><a href="{{$item->link}}">{{\App\Providers\MyProvider::_text($item->title)}}</a></li>
                        @endforeach
                    </ul>
                    <ul class="fw-links">
                        <li><a href="#">England</a></li>
                        <li><a href="#">Netherlands</a></li>
                        <li><a href="#">Hungary</a></li>
                        <li><a href="#">Croatia</a></li>
                        <li><a href="#">Poland</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fs-widget">
                    <h4>{{__('web/public.user_service')}}</h4>
                    @foreach($webMenusFooter2Provider as $item)
                        <div class="fw-item">
                            <h5><a href="{{$item->link}}">{{\App\Providers\MyProvider::_text($item->title)}}</a></h5>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-option">
            <div class="row">
                <div class="col-lg-12">
                    <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="co-widget">
                        <ul>
                            <li><a href="#">Copyright notification</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
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
<!-- Search model end -->




