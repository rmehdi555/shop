<?php

use Illuminate\Support\Facades\App;
use Hekmatinasser\Verta\Verta;
$locale = App::getLocale();
?>
<!DOCTYPE html>
<html dir="@if($locale=="fa") rtl @else ltr @endif">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('web/2021/image/favicon.png" rel="icon')}}" />
    <title>{{\App\Providers\MyProvider::_text($siteDetailsProvider["site_name"]->value)}}</title>
    <meta name="description" content="آسن">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/bootstrap-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/bootstrap-grid-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/slicknav.min.css')}}" />

    <!-- CSS Part End-->
    @if($locale=="en")
        <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style.css')}}" />
        @else
        <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style-rtl-v-1-1.css')}}" />
        @endif



    <style>
        img{
            max-width:100%;
        }
    </style>
</head>