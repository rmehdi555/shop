<?php
if(session('Local_Currency')=='')  session()->put('Local_Currency', "IRR");
use Illuminate\Support\Facades\App;
use Hekmatinasser\Verta\Verta;
$locale = App::getLocale();
?>
<!DOCTYPE html>
<html dir="@if($locale=="fa") rtl @else ltr @endif" lang="fa">
<head>


    @yield('meta')
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="آسن">
    <meta name="mobile-web-app-capable" content="yes">
    <meta property="og:site_name" content="assen.ir" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://assen.ir/"/>
    <meta property="og:image" content="{{asset($siteDetailsProvider["image_logo"]->images["images"]["original"])}}"/>
    <meta name="author" content="rmehdi555.ir">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset($siteDetailsProvider["image_logo"]->images["images"]["original"])}}">

    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/app.css?v='.time())}}')}}" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6JTRLF6Q3B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-6JTRLF6Q3B');
    </script>


    <!-- CSS Part End-->
    {{--@if($locale=="en")--}}
        {{--<link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style.css')}}" />--}}
        {{--@else--}}
        {{--<link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style-rtl-v-1-5.css?v='.time())}}" />--}}
        {{--@endif--}}


    <script src="{{asset('web/2021/js/sweetalert.min.js')}}"></script>
</head>