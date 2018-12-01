<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <title>
            @section('title')
                Quero Tranformar Eventos
            @show
        </title>
        <!--global css starts-->
        {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/custom.css') }}">--}}
        <!--end of global css-->
        <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
    </head>
    <body>
    @yield('content')


    </body>
</html>