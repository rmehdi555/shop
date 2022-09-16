@extends('web.master')
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($category->activeProducts()[0]))
                    <div class="col-lg-12">

                        <x-web-show-product-in-category :category="$category">
                        </x-web-show-product-in-category>

                    </div>
                @endif

            </div>
        </div>
    </section>
    <!-- Latest Section End -->

@endsection