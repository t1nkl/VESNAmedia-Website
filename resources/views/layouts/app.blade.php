<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vesnamedia</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <meta name="author" content="" />
    <meta name="Resource-type" content="Document" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/odd-grid.css') }}" />

    <!-- /*===== custom css =====*/ -->
    @yield('custom_css')

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>
<body class="">
    <div class="buy-journal-block">
        <a href="/buy-journal" class="buy-journal-link">Купить журнал
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
    <div class="container">

        @include('includes.header')

        @yield('content')

        @include('includes.footer')

    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/colorfinder-1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/gridScrollFx.js') }}"></script>

    <!-- /*===== custom javascript =====*/ -->
    @yield('custom_javascript')

    <script type="text/javascript">
        new GridScrollFx( document.getElementById( 'grid' ), {
            viewportFactor : 0.01
        } );
    </script>
</body>
</html>