@extends('web.master')
@section('meta')
    <title> {{$page->seo_title}} </title>
    <meta name="description"
          content="{{$page->seo_description}}"/>
    <meta property="og:title" content=" {{$page->seo_title}} "/>
    <meta property="og:description"
          content="{{$page->seo_description}} "/>
    <meta name="robots" content="{{$page->seo_index?"index":"noindex"}},{{$page->seo_follow?"follow":"nofollow"}}">
    <link rel="canonical" href="{{$page->seo_canonical??url()->current()}}">
@endsection
@section('content')
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