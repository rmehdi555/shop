<?php

use Illuminate\Support\Facades\App;

$locale = App::getLocale();
?>
<!DOCTYPE html>
<html dir="@if($locale=="fa") rtl @else ltr @endif">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('web/2020/image/favicon.png" rel="icon')}}" />
    <title>{{\App\Providers\MyProvider::_text($siteDetailsProvider["site_name"]->value)}}</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/js/bootstrap/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/owl.transitions.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/responsive.css')}}" />

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    {{--<link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/sweetalert.css')}}" />--}}
    <script src="{{asset('web/2020/js/sweetalert.min.js')}}"></script>
    <!-- CSS Part End-->
    @if($locale=="fa")
        <link rel="stylesheet" type="text/css" href="{{asset('web/2020/js/bootstrap/css/bootstrap-rtl.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/stylesheet-rtl.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('web/2020/css/responsive-rtl.css')}}" />
        @endif
</head>