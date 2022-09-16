@extends('web.master')
@section('content')

    <section class="padding-top-index">
    </section>

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($news[0]))
                    <div class="col-lg-4">

                        <x-web-show-news-in-index :news="$news">
                        </x-web-show-news-in-index>
                    </div>



                @endif

                @if(isset($categories[0]))
                    <div class="col-lg-8">
                        <x-web-show-product-in-index :category="$categories[0]">
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
                @if(isset($articles[0]))
                    <div class="col-lg-4">

                        <x-web-show-article-in-index :articles="$articles">
                        </x-web-show-article-in-index>
                    </div>



                @endif
                @if(isset($categories[1]))
                    <div class="col-lg-8">

                        <x-web-show-product-in-index :category="$categories[1]">
                        </x-web-show-product-in-index>

                    </div>



                @endif
            </div>
        </div>
    </section>
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($categories[2]))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categories[2]">
                        </x-web-show-product-in-index>

                    </div>



                @endif

                @if(isset($categories[3]))
                    <div class="col-lg-6">

                        <x-web-show-product-in-index :category="$categories[3]">
                        </x-web-show-product-in-index>

                    </div>



                @endif
            </div>
        </div>
    </section>
@endsection