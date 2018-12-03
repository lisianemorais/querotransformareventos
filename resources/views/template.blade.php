
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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
        <!--end of global css-->
        @yield('header_styles')
    </head>
    <body>
        <header class="header-eventos">
            <div class="limite-header">
                <h2 class="titulo-quero-tranformar"> Quero Transformar Eventos</h2>
            </div>
        </header>

        @yield('content')

        <div class="footer">
            <div>
                <span>© 2018 - Quero Tranformar Eventos</span>
            </div>
        </div>
        <!--global js starts-->
        <script src="{{ asset('js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    </body>
</html>