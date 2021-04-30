@extends('web.master')
@section('content')
    <section class="padding-top-index">
    </section>
    <section class="latest-section">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    {!! \App\Providers\MyProvider::_text($page->body)!!}
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </section>

@endsection