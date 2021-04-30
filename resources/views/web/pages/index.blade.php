
@extends('web.master')
@section('content')

    <section class="padding-top-index">
    </section>

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products20))
                <div class="col-lg-6">

                    <x-web-show-product-in-category :category="$categoryName[20]">
                    </x-web-show-product-in-category>
                </div>



                @endif

                    @if(isset($products21))
                        <div class="col-lg-6">
                            <x-web-show-product-in-category :category="$categoryName[21]">
                            </x-web-show-product-in-category>

                        </div>



                    @endif
            </div>
        </div>
    </section>
    <!-- Latest Section End -->


    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products22))
                    <div class="col-lg-6">

                        <x-web-show-product-in-category :category="$categoryName[22]">
                        </x-web-show-product-in-category>

                    </div>



                @endif

                @if(isset($products23))
                    <div class="col-lg-6">

                        <x-web-show-product-in-category :category="$categoryName[23]">
                        </x-web-show-product-in-category>

                    </div>



                @endif
            </div>
        </div>
    </section>
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products24))
                    <div class="col-lg-6">

                        <x-web-show-product-in-category :category="$categoryName[24]">
                        </x-web-show-product-in-category>

                    </div>



                @endif

                @if(isset($products25))
                    <div class="col-lg-6">

                        <x-web-show-product-in-category :category="$categoryName[25]">
                        </x-web-show-product-in-category>

                    </div>



                @endif
            </div>
        </div>
    </section>
@endsection