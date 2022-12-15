<?php
if(session('Local_Currency')=='')  session()->put('Local_Currency', "IRR");
use Illuminate\Support\Facades\App;
use Hekmatinasser\Verta\Verta;
$locale = App::getLocale();
?>
<!DOCTYPE html>
<html dir="@if($locale=="fa") rtl @else ltr @endif" lang="fa">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F0SCH5DLEX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F0SCH5DLEX');
    </script>
    <!-- Meta Tags -->

    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="application-name" content="آسن" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="آسن">
    <meta name="mobile-web-app-capable" content="yes">
    <meta property="og:site_name" content="آسن" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://assen.ir/"/>
    <meta property="og:image" content="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}"/>

    @yield('meta')
    <meta name="author" content="rmehdi555.ir">
    <link rel="icon" type="image/png" sizes="32x32" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">

    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/bootstrap-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/bootstrap-grid-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/slicknav.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/w3-theme-blue-grey.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/w3.css')}}" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6JTRLF6Q3B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-6JTRLF6Q3B');
    </script>


    <!-- CSS Part End-->
    @if($locale=="en")
        <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style.css')}}" />
        @else
        <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style-rtl-v-1-5.css')}}" />
        @endif



    <style>
        img{
            max-width:100%;
        }
    </style>

    <script src="{{asset('web/2021/js/sweetalert.min.js')}}"></script>
</head>