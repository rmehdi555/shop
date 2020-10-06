
@extends('web.master-product')
@section('content')




                <!-- Left Part End-->
                <!--Middle Part Start-->

                <div id="content" class="col-sm-9">
                    <!-- Slideshow Start-->
                    <div class="slideshow single-slider owl-carousel">
                        @foreach($slider as $baner)
                            <div class="item"> <a href="{{$baner->link}}"><img class="img-responsive" src="{{$baner->images["images"]["920-380"]}}" alt="{{\App\Providers\MyProvider::_text($baner->title)}}" /></a> </div>
                        @endforeach
                    </div>
                    <!-- Slideshow End-->
                    <!-- Featured محصولات Start-->
                    @if(isset($newProducts))
                        <h3 class="subtitle">{{__('web/public.product_new')}}</h3>
                            <div class="owl-carousel product_carousel">
                             @foreach($newProducts as $product)


                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["200"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}}" class="img-responsive" /></a></div>
                                        <div class="caption">
                                            <h4><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></h4>
                                            <p class="price"> <span class="price-new">{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span><br> @if($product->discount>0)<span class="price-old">{{\App\Providers\MyProvider::exToLocal($product->price)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> <span class="saving">-{{$product->discount}}%</span> @endif</p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('46');"><span>{{__('web/public.add_cart')}}</span></button>
                                            {{--<div class="add-to-links">--}}
                                                {{--<button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>--}}
                                                {{--<button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                             @endforeach
                            </div>

                    @endif

                    @if(isset($specialProducts))
                        <h3 class="subtitle">{{__('web/public.product_vip')}}</h3>
                        <div class="owl-carousel product_carousel">
                            @foreach($specialProducts as $product)


                                <div class="product-thumb clearfix">
                                    <div class="image"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["200"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}}" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></h4>
                                        <p class="price"> <span class="price-new">{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span><br> @if($product->discount>0)<span class="price-old">{{\App\Providers\MyProvider::exToLocal($product->price)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</span> <span class="saving">-{{$product->discount}}%</span> @endif</p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="cart.add('46');"><span>{{__('web/public.add_cart')}}</span></button>
                                        {{--<div class="add-to-links">--}}
                                            {{--<button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>--}}
                                            {{--<button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    @endif


                    <!-- Brand محصولات Slider End -->
                    <!-- Brand Logo Carousel Start-->
                    <div id="carousel" class="owl-carousel nxt">
                        <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                        <div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
                    </div>
                    <!-- Brand Logo Carousel End -->
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>
@endsection