
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
            @section('title')
                Quero Tranformar Eventos
            @endsection
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
            <a href="{{ URL::route('home') }}"> <div class="limite-header">
                <h2 class="titulo-quero-tranformar"> Quero Transformar Eventos</h2>
            </div>
            </a>
        </header>

        @yield('content')

        <div class="footer">
            <div>
                <span>© 2018 - Quero Tranformar Eventos</span>
            </div>
        </div>
        <!--global js starts-->
        @yield('scripts')
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/raphael.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.circliful.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/livicons-1.4.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>
