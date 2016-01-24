<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <title>
            @section('title')
            @show{{-- 页面标题 --}}
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="TimeFragments" />
        <meta name="author" content="Luxurioust">

        <meta name="description" content="@yield('description')">{{-- 页面描述 --}}

        <meta name="keywords" content="@yield('keywords')" />    {{-- 页面关键词 --}}

        {{-- Favicons --}}

        <link rel="shortcut icon" href="{{ route('home')}}/images/icon/ico-16.ico" sizes="16x16">
        <link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="{{ route('home')}}/images/icon/ico-144.png" sizes="144x144">

        @section('beforeStyle')
        @show{{-- 页面内联样式之前 --}}

        {{ HTML::style('assets/css/fonts.googleapis.css') }}

        {{-- Stylesheet --}}

        {{ style('cdn::bootstrap') }}
        {{ style('cdn::font-awesome') }}
        {{ style('flexslider-2.2') }}
        {{ style('normalize-3.0.1') }}

        {{ HTML::style('assets/css/loading.css') }}
        {{ HTML::style('assets/css/main.css') }}
        {{ HTML::style('assets/css/style-responsive.css') }}
        {{ HTML::style('assets/css/isotope.css') }}

        {{-- Primary color theme --}}

        {{ HTML::style('assets/css/color/blu.css') }}

        @section('afterStyle')
        @show{{-- 页面内联样式之后 --}}

        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}

        <!--[if lt IE 9]>
            {{ script('html5shiv-3.7.0') }}
            {{ HTML::script('assets/js/respond.min.js') }}
        <![endif]-->

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    </head>
    @yield('body')

        @section('end')
        @show{{-- 页面主体之后 --}}