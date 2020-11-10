<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>PP Annasrullah</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
    
    <link href="{{ asset('tentang/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Owl Carousel -->
    <link href="{{ asset('tentang/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('tentang/css/owl.theme.default.css') }}" rel="stylesheet">

	<!-- Magnific Popup -->
    <link href="{{ asset('tentang/css/magnific-popup.css') }}" rel="stylesheet">

	<!-- Font Awesome Icon -->
    <link href="{{ asset('tentang/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Custom stlylesheet -->
    <link href="{{ asset('tentang/css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		
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
                        
                    <li class="nav-item">
                                <a style="color:rgb(46, 184, 115);" class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

	</header>
	<!-- /Header -->
	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Selamat Datang</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Santri Santun</h3>
						<p>Pengajaran akhlak dan perilaku santri agar menjadi teladan di masyarakat.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Santri Qurani</h3>
						<p>Program Tahfidzul Quran bagi santri yang berminat menghafalkan Al-Quran.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Santri Salaf</h3>
						<p>Sistem pesantren salaf dengan landasan Ahlussunah Waljamaah Annahdhiyah.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Galeri Kegiatan</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Perayaan</span>
						<h3>Hari Santri</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Upacara</span>
						<h3>Peringatan HUT RI</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work4.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Ekstrakurikuler</span>
						<h3>Seni Islam Rebana</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work4.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work3.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Kegiatan</span>
						<h3>Istighosah & Doa Bersama</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work3.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work5.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Rapat</span>
						<h3>Pemilihan Lurah Pesantren</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work5.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Kegiatan</span>
						<h3>Sholat Berjamaah</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Kegiatan Pesantren</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Ulumul Quran</h3>
						<p>Menghafal dan Mengaji ilmu-ilmu terkait Al-Quran.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Ulumus Syariah</h3>
						<p>Mengaji ilmu-ilmu terkait Syariat Islam.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Ulumul Fiqih</h3>
						<p>Mengaji ilmu-ilmu Fiqih dalam kehidupan.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Ulumul Muamalah</h3>
						<p>Mengaji ilmu-ilmu hubungan antar sesama.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Khitobah</h3>
						<p>Melatih santri dalam berbicara didepan publik.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-flask"></i>
						<h3>Seni Islami</h3>
						<p>Mewadahi minat dan bakat santri dalam bidang kesenian.</p>
					</div>
				</div>
				<!-- /service -->
				

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">PonPes Annasrullah</h2>
					</div>
					<p>Terletak di Jalan Pergerakan Nomor 17 Kecamatan Tembalang Kota Semrang Jawa Tengah, dekat dengan kampus Universitas Diponegoro, Politeknik Negeri Semarang, dan Politeknik Kementerian Kesehatan RI Semarang.</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Diasuh Oleh K.H Khoirul Ahmad Annasrullah.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Dengan 40 Asatidz dan Pengurus.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Ngaji sambil Kuliah.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Dengan berbagai ekstrakurikuler penunjang keterampilan.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="img/about1.jpg" alt="">
						<img class="img-responsive" src="img/about2 (2).jpg" alt="">
						<img class="img-responsive" src="img/about1.jpg" alt="">
						<img class="img-responsive" src="img/about2 (2).jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">500</span></h3>
						<span class="white-text">Santri Putra & Putri</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">9</span></h3>
						<span class="white-text">Penghargaan</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">10</span></h3>
						<span class="white-text">Kantin Pondok</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Haflah Akhirussanah</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Informasi Biaya</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Syahriyah</span>
							<div class="price">
								<h3>30K<span class="duration">/ bulan</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Listrik</p>
							</li>
							<li>
								<p>Air Bersih</p>
							</li>
							<li>
								<p></p>
							</li>
						</ul>
						
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Kost Makan</span>
							<div class="price">
								<h3>180K<span class="duration">/ bulan</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>2 kali makan/hari</p>
							</li>
							<li>
								<p>Kebersihan makanan</p>
							</li>
							<li>
								<p>Kesucian Masakan</p>
							</li>
						</ul>
						
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Pendaftaran</span>
							<div class="price">
								<h3>400K<span class="duration">/ Santri</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>Sumbangan Pembangunan</p>
							</li>
							<li>
								<p>Seragam muslim</p>
							</li>
							<li>
								<p>Administrasi</p>
							</li>
						</ul>
						
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="testimonial">
				<div class="testimonial-meta">
					<h1 class="white-text">Bersama Santri Damailah Negeri</h1>
					
				</div>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	

	

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Pondok Pesantren Annasrullah</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telephone</h3>
						<p>(0293)44342</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>annasrullah@mail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Alamat</h3>
						<p>Jalan Pergerakan No.17 Tembalang</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Kirim Saran</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


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
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="index.html" target="_blank">PP Annasrullah</a></p>
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
    <script src="{{ asset('tentang/js/jquery.min.js') }}"></script>
    <script src="{{ asset('tentang/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tentang/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('tentang/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('tentang/ain.js') }}"></script>

</body>

</html>
