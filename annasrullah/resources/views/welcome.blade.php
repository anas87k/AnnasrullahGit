<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Annasrullah</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/background.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
        <nav class="navbar navbar-expand-lg navbar-dark nav-transparent shadow-sm">
            <div class="container">
                <a style="color:rgb(46, 184, 115);" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Annasrullah') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            @if (Auth::check())
                            <li class="nav-item active">
                                <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ url('/home') }}">Pendaftaran</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ route('syahriyah.index') }}">Syahriyah</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ url('/home') }}">Ijin</a>
                            </li>
                            @endif
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a style="color:rgb(46, 184, 115);" id="navbarDropdown" class="nav-link dropdown-toggle" method="POST" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nama_lengkap }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a  class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container col-md-offset-1">
				<div class="row">

					<!-- home content -->
					<div class="col-md-12 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Sistem Informasi Pondok Pesantren Annasrullah</h1>
							<p class="white-text">Pondok Pesantren Mahasiswa Annasrullah Jalan Pergerakan Nomor 17 Tembalang Kota Semarang Provinsi Jawa Tengah.
                            </p>
                            @if (Route::has('login'))
                                @auth
                                <button class="white-btn"><a href="{{ url('/home') }}">Home</a></button>
                                @else
                                <button class="white-btn"><a href="{{ url('/register') }}">Daftar</a></button>
                                @if (Route::has('register'))
                                <button class="main-btn"><a style="color: #fff;" href="{{ route('login') }}">Login</a></button>
                                @endif
                                @endauth
                            @endif
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

            <!-- Container -->
            <div class="container">

                <!-- Row -->
                <div class="row">

                    <div class="col-md-12">

                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
                        </div>
                        <!-- /footer logo -->

                        <!-- footer follow -->
                        <ul class="footer-follow">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!-- /footer follow -->

                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            <p>Copyright © 2019. All Rights Reserved. Designed by <a href="index.html" target="_blank">PP Annasrullah</a></p>
                        </div>
                        <!-- /footer copyright -->

                    </div>

                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

        </footer>
        <!-- /Footer -->

        <!-- Back to top -->
        <div id="back-to-top"></div>
        <!-- /Back to top -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /Preloader -->

        <!-- jQuery Plugins -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
