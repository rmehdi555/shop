<?php
if(session('Local_Currency')=='')  session()->put('Local_Currency', "IRR");
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
    <link rel="icon" type="image/png" sizes="32x32" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{$siteDetailsProvider["image_logo"]->images["images"]["original"]}}">
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
        <link rel="stylesheet" type="text/css" href="{{asset('web/2021/css/style-rtl-v-1-2.css')}}" />
        @endif



    <style>
        img{
            max-width:100%;
        }
    </style>
</head>