
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

                    <x-web-show-product-in-index :category="$categoryName[20]">
                    </x-web-show-product-in-index>
                </div>



                @endif

                    @if(isset($products21))
                        <div class="col-lg-6">
                            <x-web-show-product-in-index :category="$categoryName[21]">
                            </x-web-show-product-in-index>

                        </div>



                    @endif
            </div>
        </div>
    </section>
    <!-- Latest Section End -->


    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products27))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categoryName[27]">
                        </x-web-show-product-in-index>

                    </div>



                @endif

                @if(isset($products28))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categoryName[28]">
                        </x-web-show-product-in-index>

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

                        <x-web-show-product-in-index :category="$categoryName[24]">
                        </x-web-show-product-in-index>

                    </div>



                @endif

                @if(isset($products25))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categoryName[25]">
                        </x-web-show-product-in-index>

                    </div>



                @endif
            </div>
        </div>
    </section>
@endsection