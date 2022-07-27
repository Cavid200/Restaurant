<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Lambert  - shared on GFXFree.net - Responsive  Pub / Restaurant Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        @include('user.partials._css')
    </head>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
           @include('user.partials._navbar')
            <!--header end-->
            <!--=============== wrapper ===============-->	
           @yield('content')
            <!-- wrapper end -->
            @include('user.partials._footer')
        </div>
        <!-- Main end -->
        @include('user.partials._js')
        @yield('js')
    </body>
</html>