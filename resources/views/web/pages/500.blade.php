@extends('web.master')
@section('content')
    <section class="padding-top-index">
    </section>
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title-404 text-center">500</h1>
                    <p class="text-center lead">{{__('web/messages.500_1')}}<br>
                        {{__('web/messages.500_2')}} </p>
                    <div class="buttons text-center"> <a class="btn btn-primary btn-lg" href="{{ route('web.index') }}"> {{__('web/public.continuation')}}</a> </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
@endsection