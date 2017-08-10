<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kyrylo" />
	<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
    <meta name="Resource-type" content="Document" />

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title')</title>
    <meta name="description" content='@yield('description')' />
    <meta name="keywords" content="@yield('keywords')" />

    <!-- /*===== custom Open Graph =====*/ -->
    @yield('open_graph')

    <!-- <link rel="shortcut icon" href="/img/logo.png" type="image/png"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/odd-grid.css') }}" />

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('sliderengine/amazingslider-1.css') }}"> -->

    <!-- /*===== custom css =====*/ -->
    @yield('custom_css')

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TVHDN5C');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVHDN5C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- /*===== preloader html =====*/ -->
    @yield('preloader_html')

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
    <script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/masonry.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/AnimOnScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
    <!-- <script src="{{ asset('sliderengine/jquery-1.11.3.js') }}"></script>
    <script src="{{ asset('sliderengine/amazingslider.js') }}"></script>

    <script src="{{ asset('sliderengine/initslider-1.js') }}"></script> -->
    <!-- /*===== lid form =====*/ -->
    <script type="text/javascript">
        $('.footer-subscribtion-form').submit(
            function subscribeLid( event ) {
                event.preventDefault();
                var email = $('.subscribtion-form-email').val();
                $.ajax({
                    type: "POST",
                    url: '/subscribe',
                    data: {email: email},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        $('.footer-subscribtion-form').slideUp();
                        $('.footer-subscribtion-form-response').html('Поздравляем. Вы успешно подписались на рассылку журнала VESNA');
                    },
                    error: function(data){
                        setTimeout(mailCallback, 2000);
                    }
                });
            }
        );
    </script>

    <!-- /*===== custom javascript =====*/ -->
    @yield('custom_javascript')

    <script>
    if(document.getElementById( 'grid' )){
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
        }
	</script>
</body>
</html>
