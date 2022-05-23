<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="ScriptF" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,700|Playfair+Display:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('/css/onepage.css') }}" type="text/css" />
	<!-- / -->
	<link rel="icon" type="image/png" href="{{ asset('/images/icon.png') }}">

    <link rel="stylesheet" href="{{ asset('/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/et-line.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/modules/izitoast/css/iziToast.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/timeline.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('/css/fonts.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<title>SeguroCargo</title>

	<style>
		#gotoTop:hover {
			background: #F47E53;
		}

		#slider-subscribe-form .input-group {
			background-color: #FFF;
			border: 1px solid #EEE;
			border-radius: 3px;
			box-shadow: 0 0 30px 4px rgba(0,0,0,0.15);
			border-left: 3px solid #F07F4A;
		}

		#slider-subscribe-form input {
			box-shadow: none;
			border: 0;
			height: 64px;
			padding-left: 1.25rem;
		}

		#slider-subscribe-form .input-group { align-items: center; }

		#slider-subscribe-form .form-control.error { background-color: #ffe6e6; }

		.social-icon { margin-left: 8px; }

		#slider-subscribe-form { width: 125%; }

		.device-sm #slider-subscribe-form,
		.device-xs #slider-subscribe-form { width: 100%; }

		.program-link {
			background: #F47E53;
			margin: -5px -15px;
			padding: 5px 15px;
			border-radius: 40px;
			color: #fff;
		}

		#primary-menu ul li:hover > a, #primary-menu ul li.current > a {
			color: #F47E53;
		}
				
		/* img-hover-wraps */
		.img-hover-wrap {
			-webkit-transition: transform .3s ease;
			-o-transition: transform .3s ease;
			transition: transform .3s ease;
			-moz-transform-style: flat !important;
			-webkit-backface-visibility: hidden;
		}

		.img-hover-wrap:hover {
			-webkit-transform: scale(1.06);
			-ms-transform: scale(1.06);
			-o-transform: scale(1.06);
			transform: scale(1.06);
			z-index: 2;
		}

		.img-hover-card > a:after {
			content: " ";
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			background-color: rgba(0, 0, 0, 0.3);
			z-index: 0;
			-webkit-transition: background-color .3s ease;
			-o-transition: background-color .3s ease;
			transition: background-color .3s ease;
		}

		.img-hover-wrap:hover .img-hover-card > a:after { background-color: rgba(0, 0, 0, 0.6); }

		.img-hover-card {
			position: relative;
			display: block;
			will-change: transform;
			transition: all .3s ease;
			box-shadow: 0 10px 40px transparent;
		}

		.img-hover-card a {
			width: 100%;
			max-width: 100%;
			display: block;
			z-index: 99;
		}

		.img-hover-card.hover-in {
			transition: -webkit-transform .2s ease-out;
			transition: transform .2s ease-out;
			transition: transform .2s ease-out, -webkit-transform .2s ease-out;
		}

		.img-hover-card.hover-3d { z-index: 2; }

		.img-hover-card.hover-out {
			transition: -webkit-transform .2s ease-in;
			transition: transform .2s ease-in;
			transition: transform .2s ease-in, -webkit-transform .2s ease-in;
		}

		.img-hover-wrap:hover .img-hover-card { box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4); }

		.img-hover-wrap .img-hover-detail {
			position: absolute;
			top: auto;
			left: 40px;
			bottom: 40px;
			pointer-events: none;
			-webkit-backface-visibility: hidden;
			-webkit-transform: scale(1) translateY(40px) translateZ(50px);
			-ms-transform: scale(1) translateY(30px) translateZ(50px);
			-o-transform: scale(1) translateY(30px) translateZ(50px);
			transform: scale(1) translateY(30px) translateZ(50px);
			-webkit-transition: transform .2s ease;
			-o-transition: transform .2s ease;
			transition: transform .2s ease;
		}

		.img-hover-wrap:hover .img-hover-detail {
			opacity: 1;
			-webkit-transform: scale(1.06) translateY(-5px) translateZ(50px);
			-ms-transform: scale(1.06) translateY(-5px) translateZ(50px);
			-o-transform: scale(1.06) translateY(-5px) translateZ(50px);
			transform: scale(1.06) translateY(-5px) translateZ(50px);
		}

		.img-hover-wrap .img-hover-title {
			margin: 0 0 20px 0;
			font-size: 17px;
			font-weight: 600;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
			z-index: 9;
		}

		.img-hover-wrap .img-link {
			opacity: 0;
			width: 20px;
			height: 20px;
			border: 1px solid #FFF;
			border-radius: 50%;
			text-align: center;
			line-height: 18px;
			font-size: 11px;
			-webkit-transition: opacity .3s ease;
			-o-transition: opacity .3s ease;
			transition: opacity .3s ease;
		}

		.img-hover-wrap:hover .img-link { opacity: 1; }

		.img-hover-detail a { color: #FFF; }

		#section-about {
			padding-bottom: 0px;
		}
		.svg-curve {
			position: relative;
			z-index: 1;
			top: 70px;
			left: 0;
			bottom: 0;
		}

		@media (max-width: 991px) {
			#header.transparent-header.dark:not(.sticky-header) #header-wrap {
				background-color: #fff;
				border-bottom-color: rgba(0,0,0,0.1) !important;
			}
			#primary-menu-trigger {
				color: #000;
			}
			.program-link {
				background: #fff;
				margin: 0px 0px;
				padding: 0px 0px;
				border-radius: 0px;
				color: #000;
			}
			.dark #header-wrap:not(.not-dark) #primary-menu > ul > li > a {
				color: #000;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
			}
			.dark #header-wrap:not(.not-dark) #primary-menu > ul > li:hover > a, .dark #header-wrap:not(.not-dark) #primary-menu > ul > li.current > a, .dark #header-wrap:not(.not-dark) #primary-menu > .container > ul > li:hover > a, .dark #header-wrap:not(.not-dark) #primary-menu > .container > ul > li.current > a {    
				color: #F47E53;
			}
		}

		@media (max-width: 771px) {
			.svg-curve {
				top: 30px;
			}
		}
	</style>

</head>

<body class="stretched side-push-panel no-transition">

	<div class="body-overlay"></div>

	{{--<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget widget_links clearfix">

				<h4>About Canvas</h4>

				<div style="font-size: 14px; line-height: 1.7;">
					<address style="line-height: 1.7;">
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
					</address>

					<div class="clear topmargin-sm"></div>

					<abbr title="Phone Number">Phone:</abbr> (91) 8547 632521<br>
					<abbr title="Fax">Fax:</abbr> (91) 11 4752 1433<br>
					<abbr title="Email Address">Email:</abbr> info@canvas.com
				</div>

			</div>

			<div class="widget clearfix">

				<h4>Connect Socially</h4>

				<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-github" title="Github">
					<i class="icon-github"></i>
					<i class="icon-github"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
					<i class="icon-pinterest"></i>
					<i class="icon-pinterest"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-forrst" title="Forrst">
					<i class="icon-forrst"></i>
					<i class="icon-forrst"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-linkedin" title="LinkedIn">
					<i class="icon-linkedin"></i>
					<i class="icon-linkedin"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-gplus" title="Google Plus">
					<i class="icon-gplus"></i>
					<i class="icon-gplus"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
					<i class="icon-instagram"></i>
					<i class="icon-instagram"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-flickr" title="Flickr">
					<i class="icon-flickr"></i>
					<i class="icon-flickr"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
					<i class="icon-skype"></i>
					<i class="icon-skype"></i>
				</a>

			</div>

		</div>

	</div>--}}

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark transparent-header static-sticky" data-sticky-class="not-dark" data-sticky-offset="full"  data-sticky-offset-negative="100">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ route('welcome') }}" class="standard-logo" data-dark-logo="{{ asset('/images/canvasone.png') }}"><img src="{{ asset('/images/canvasone.png') }}" alt="Canvas Logo"></a>
						<a href="{{ route('welcome') }}" class="retina-logo" data-dark-logo="{{ asset('/images/canvasone@2x.png') }}"><img src="{{ asset('/images/canvasone@2x.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Inicio</div></a></li>
							<li><a href="#" data-href="#section-about"><div>Nosotros</div></a></li>
							{{--
							<li><a href="#" data-href="#section-services"><div>Servicios</div></a></li>
							--}}
							<li><a href="#" data-href="#section-contact"><div>Contácto</div></a></li>
							<li><a href="http://50.31.20.157/sce" target="_blank"><div class="program-link">Programa</div></a></li>
						</ul>
						{{--<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-reorder"></i></a></div>--}}
					</nav><!-- #primary-menu end -->
				</li>
			</div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen">
			<div class="slider-parallax-inner">
				<div class="row clearfix">
					<div class="col-xl-5 col-md-6 full-screen" style="background-color: #FFF;">
						<div class="vertical-middle subscribe-widget" data-loader="button">
							<div class="col-padding">
								<div class="heading-block nobottomborder leftmargin-sm">
									<h1 class="nott t400" style="line-height: 1.4;font-size: 48px; font-family: 'Playfair Display'; font-weight: normal">Rastrea tú caja</h1>
									<span class="" style="font-size:16px; top-margin: 20px;" class="t300">Con <strong>SeguroCago</strong> rastrear tus envíos de una manera mas fácil, solo escribe el número de tu guía aqui abajo.</span>
								</div>
								<div class="widget-subscribe-form-result"></div>
								<div id="slider-subscribe-form" class="nobottommargin">
									<div class="input-group">
										<input type="text" id="label" name="label" class="form-control input-lg not-dark required" placeholder="No. de guía...">
										<div class="input-group-append">
											<button id="send-label" class="button nobg" type="submit" style="color: #F07F4A; text-shadow: none;"><i class="icon-line-search" style="font-size: 24px; line-height: 40px"></i></button>
										</div>
									</div>
								</div>								
								{{--<div class="center topmargin">
									<a href="#" class="social-icon inline-block si-rounded si-colored si-small si-facebook noleftmargin" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-rounded si-colored si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-rounded si-colored si-small si-github" title="Github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>
									<a href="#" class="social-icon inline-block si-rounded si-colored si-small si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								</div>--}}
							</div>
						</div>
						<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow"><i class="icon-line-arrow-down infinite animated fadeInDown"></i></a>
					</div>
					<div class="col-xl-7 col-md-6 full-screen center nopadding" style="background: url('{{ asset('/images/page/op-subscription.jpg') }}') center center no-repeat; background-size: cover; z-index: -1">
						<div class="vertical-middle dark center clearfix">
							<div class="emphasis-title nobottommargin">
								<h1>
									<span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="6000">
										<span class="t-rotate t700 font-body opm-medium-word">Seguro.|Confiable.|Fácil.|Ágil.</span>
									</span>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #slider end -->
		
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap nopadding">				
				<div id="section-about" class="center page-section">
					<div class="container clearfix">
						<h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;">Tipos de Carga</h2>
						<p class="lead divcenter bottommargin" style="max-width: 800px;">Contamos con dos tipos de carga, para darte un transporte efectivo y a la medida de tus necesidades</p>						
						<div class="row grid-container clearfix" style="overflow: visible;">							

							<div class="offset-lg-2 col-lg-4 col-sm-6 rounded img-hover-wrap">
								<div class="img-hover-card">
									<a><img src="{{ asset('/images/airplane.jpg') }}" alt=""></a>
									<div class="img-hover-detail">
										<h3 class="img-hover-title"><a href="#">Áerea</a></h3>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
								<div class="img-hover-card">
									<a><img src="{{ asset('/images/ship.jpg') }}" alt=""></a>
									<div class="img-hover-detail">
										<h3 class="img-hover-title"><a href="#">Marítima</a></h3>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="clear"></div>
					<svg class="svg-curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1740 178.159">
						<path style="fill:#FFF; width: 100%;" d="M1990.181,377.13V489.486s-281.887,121.35-556.146,34.464-575.112-69.278-710.173-16.7-217.294,65.221-399.347-3.539S70.18,504.716,70.18,504.716v-125Z" transform="translate(-100 -377.13)"/>
					</svg>
				</div>

				<div class="section dark parallax nomargin" style="background-image: url('{{ asset('/images/hand.jpg') }}'); padding: 140px 0;"  data-bottom-top="background-position:0px 50px;" data-top-bottom="background-position:0px -300px;">
					<div class="container center clearfix">
						<div class="row clearfix">
							<div class="col-lg-6">
								<div class="heading-block nobottomborder nobottommargin">
									<h3 class="nott font-secondary t400" style="font-size: 32px;">¿Tienes una oficina de carga y quieres mejores precios?</h3>
									<a href="#" data-scrollto="#section-contact" class="button button-large button-circle button-border button-white button-light topmargin-sm noleftmargin">contáctanos</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{--
				<div id="section-works" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1">We create &amp; craft projects that ooze creativity in every aspect. We try to create a benchmark in everything we do. Take a moment to browse through some of our recent completed work.</h2>
							</div>
						</div>
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry clearfix">

						<article class="portfolio-item pf-media pf-icons wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/1.jpg') }}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-illustrations">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/2.jpg') }}" alt="Locked Steel Gate">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Locked Steel Gate</a></h3>
										<span><a href="#">Illustrations</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-graphics pf-uielements">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/3.jpg') }}" alt="Mac Sunglasses">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Mac Sunglasses</a></h3>
										<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/4.jpg') }}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-media wide">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/5.jpg') }}" alt="Console Activity">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Console Activity</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/6.jpg') }}" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

						<article class="portfolio-item pf-uielements pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('/images/portfolio/mixed/7.jpg') }}" alt="Backpack Contents">
								</a>
								<div class="portfolio-overlay">
									<div class="portfolio-desc">
										<h3><a href="#">Backpack Contents</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
									</div>
								</div>
							</div>
						</article>

					</div><!-- #portfolio end -->

					<div class="topmargin center"><a href="#" class="button button-border button-circle t600">View More Projects</a></div>

				</div>

				<div id="section-services" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1">We enjoy working on the Services &amp; Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.</h2>
							</div>
						</div>
					</div>

					<div class="row align-items-stretch">

                        <div class="col-lg-4 d-none d-md-block" style="background: url('{{ asset('/images/services/main-bg.jpg') }}') center center no-repeat; background-size: cover;"></div>
						<div class="col-lg-8">
							<div>
								<div class="row align-items-stretch grid-border clearfix">
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-mobile"></i></a>
											</div>
											<h3>Responsive Framework</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-presentation"></i></a>
											</div>
											<h3>Beautifully Presented</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-puzzle"></i></a>
											</div>
											<h3>Extensively Extendable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Powerfully Customizable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-genius"></i></a>
											</div>
											<h3>Geniusly Transformable</h3>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-hotairballoon"></i></a>
											</div>
											<h3>Industrial Support</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="section dark nomargin">
						<div class="divcenter center" style="max-width: 900px;">
							<h2 class="nobottommargin t300 ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large notopmargin nobottommargin" style="position: relative; top: -3px;">Instant Quote</a></h2>
						</div>
					</div>

					<div class="section parallax nomargin dark" style="background-image: url('{{ asset('/images/page/testimonials.jpg') }}'); padding: 150px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

						<div class="container clearfix">

							<div class="col_two_fifth nobottommargin">&nbsp;</div>

							<div class="col_three_fifth nobottommargin col_last">

								<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testi-content">
													<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque vero numquam?</p>
													<div class="testi-meta">
														Steve Jobs
														<span>Apple Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-content">
													<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
													<div class="testi-meta">
														Collis Ta'eed
														<span>Envato Inc.</span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-content">
													<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
													<div class="testi-meta">
														John Doe
														<span>XYZ Inc.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div id="section-blog" class="page-section">

					<h2 class="center uppercase t300 ls3 font-body">Recently From the Blog</h2>

					<div class="section nobottommargin">
						<div class="container clearfix">

							<div class="row topmargin clearfix">

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="{{ asset('/images/blog/1.jpg') }}" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Press &amp; Media</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Global Meetup Program is Launching!</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="{{ asset('/images/blog/2.jpg') }}" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Inside Scoops</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">The New YouTube Economy unfolds itself</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="{{ asset('/images/blog/3.jpg') }}" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Video Blog</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Kicking Off Design Party in Style</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

								<div class="ipost col-md-6 bottommargin clearfix">
									<div class="row">
										<div class="col-lg-6">
											<div class="entry-image nobottommargin">
												<a href="#"><img src="{{ asset('/images/blog/4.jpg') }}" alt="Paris"></a>
											</div>
										</div>
										<div class="col-lg-6" style="margin-top: 20px;">
											<span class="before-heading" style="font-style: normal;">Inspiration</span>
											<div class="entry-title">
												<h3 class="t400" style="font-size: 22px;"><a href="#">Top Ten Signs You're a Designer</a></h3>
											</div>
											<div class="entry-content">
												<a href="#" class="more-link">Read more <i class="icon-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

					<div class="container topmargin-lg clearfix">

						<div id="oc-clients" class="owl-carousel topmargin image-carousel carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/1.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/2.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/3.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/4.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/5.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/6.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/7.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/8.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/9.png') }}" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="{{ asset('/images/clients/10.png') }}" alt="Clients"></a></div>

						</div>

					</div>

				</div>
				--}}

				<div id="section-contact" class="page-section notoppadding">

					{{--
					<div class="row noleftmargin norightmargin bottommargin-lg align-items-stretch">						
						<div id="headquarters-map" class="col-lg-8 col-md-6 gmap d-none d-md-block"></div>
						<div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
							<div class="col-padding">
								<h3 class="font-body t400 ls1">Our Headquarters</h3>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>North America:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>

									<div class="clear topmargin-sm"></div>

									<address style="line-height: 1.7;">
										<strong>Europe:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>

									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>
							</div>
						</div>
					</div>
					--}}

					<div class="container clearfix">

						<div class="divcenter topmargin" style="max-width: 850px;">

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="../include/form.php" method="post">

									<div class="form-process"></div>

									<div class="col_half">
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Nombre" />
									</div>
									<div class="col_half col_last">
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Correo eléctronico" />
									</div>

									<div class="clear"></div>

									<div class="col_one_third">
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Teléfono celular" />
									</div>

									<div class="col_two_third col_last">
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Asunto" />
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Mensaje"></textarea>
									</div>

									<div class="col_full center">
										<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Envíar mensaje</button>
										<br>
										<small style="display: block; font-size: 13px; margin-top: 15px;">Haremos todo lo posible para comunicarnos con usted dentro de 6 a 8 horas hábiles.</small>
									</div>

									<div class="clear"></div>

									<div class="col_full hidden">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->		

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			{{--
			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix">

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Site Links</h4>

								<ul class="list-unstyled footer-site-links nobottommargin">
									<li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
									<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">About</a></li>
									<li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
									<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Services</a></li>
									<li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Blog</a></li>
									<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Contact</a></li>
								</ul>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="../include/subscribe.php" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Contact</h4>

								<p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-github" title="Github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
			--}}

			<div id="copyrights">
				<div class="container center clearfix">
					Copyright SeguroCargo 2019 | Todos los derechos reservados
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<div id="modals"></div>	

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/plugins.js') }}"></script>
	<script src="{{ asset('/modules/izitoast/js/iziToast.js') }}"></script>

	<!-- Google Map JavaScripts
	============================================= -->
	{{--<script src="https://maps.google.com/maps/api/js?key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA"></script>--}}
	<script src="{{ asset('/js/hover3d.js') }}"></script>

	<script src="{{ asset('/js/functions.js') }}" ></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('/js/functions.js') }}"></script>

	<script>
		$(function() {
			$(".img-hover-wrap").hover3d({
				selector: ".img-hover-card",
				shine: false,
			});
			$('#send-label').click(function() {
				searchLabel();
			});
			$('#label').keyup(function(e){
				if(e.keyCode == 13)
				{
					searchLabel();
				}
			});
		});

		function searchLabel() {
			const button = $('#send-label');
			const searchIcon = '<i class="icon-line-search" style="font-size: 24px; line-height: 40px"></i>';

			button.html('<i class="icon-line-loader icon-spin nomargin"></i>').attr("disabled", true);

			$.ajax({
				method: "POST",
				url: "{{ route('search_label') }}",
				data: {
					'_token': '{{ csrf_token() }}',
					'label': $('#label').val()
				},
				success: function(respuesta) {
					console.log(respuesta);
					$('#modals').html(respuesta.html);
					$('#followingLabelModal').modal({
						show: true
					});
					button.html(searchIcon).attr("disabled", false);
				},
				error: function(error) {
					console.log(error);
					if (error.status === 422) {
						error.responseJSON.error.forEach(error => {
							showErrorToast(error);
						});
					}
					if (error.status === 404) {
						showErrorToast(error.responseJSON.error);
					}
					button.html(searchIcon).attr("disabled", false);
				}
			});
		}

		function showErrorToast(message) {
			iziToast.error({
				title: message,
				position: 'bottomLeft'
			});
		}
	</script>
	{{--
	<script>

		jQuery(window).on( 'load', function(){

			// Google Map
			jQuery('#headquarters-map').gMap({
				address: 'Melbourne, Australia',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
					{
						address: "Melbourne, Australia",
						html: "Melbourne, Australia",
						icon: {
							image: "{{ asset('/images/icons/map-icon-red.png') }}",
							iconsize: [32, 32],
							iconanchor: [14,44]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			});

		});

	</script>
	--}}

</body>
</html>