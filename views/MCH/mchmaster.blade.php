<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>hospitali ehr</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('mch.mchheader')
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-lg-4 col-md-4 gredient-bg">
            <div class="clearfix">
               <!-- .logo-title-container -->
            </div>
        </div>
        @yield('content')

    </div>
@include('mch.mchfooter')