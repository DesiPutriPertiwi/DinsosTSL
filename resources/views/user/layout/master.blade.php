<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link src="{{asset('image/logo/dinsos.png')}}" rel="stylesheet"/>
        <title>Dinas Sosial Tangerang Selatan</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="frontEnd/css/bootstrap.min.css">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="frontEnd/css/fontawesome-all.min.css">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="frontEnd/css/swiper.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="frontEnd/css/style.css">
    </head>
    <body>
        <div class="wrapper">
		
            <!--Header-->
            @include('user.includes.header')

            <!--Main content-->	

                @if(Request::is('/') ? 'class=active' : '')
                    <section class="content-section">
                        @yield('content')
                    </section>
                @elseif(Request::is('home') ? 'class=active' : '')
                    <section class="content-section">
                        @yield('content')
                    </section>
                @else
                    <section class="contents-section">
                        @yield('content')
                    </section>
                @endif

            <!--Footer section-->
            @include('user.includes.footer')

            <script type='text/javascript' src='frontEnd/js/jquery.js'></script>
            <script type='text/javascript' src='frontEnd/js/masonry.pkgd.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/jquery.collapsible.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/swiper.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/jquery.countdown.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/circle-progress.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/jquery.countTo.min.js'></script>
            <script type='text/javascript' src='frontEnd/js/custom.js'></script>
        </div> <!--.wrapper-->
	</body>
</html>