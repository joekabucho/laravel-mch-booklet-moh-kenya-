<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hospitali</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HTML5 website template">
    <meta name="keywords" content="global, template, html, sass, jquery">
    <meta name="author" content="Bucky Maler">
    @include('mch.landingheader')
</head>
<body>
@yield('content')
@include('mch.landingfooter')