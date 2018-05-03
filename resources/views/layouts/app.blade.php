

<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->



	<script type="text/javascript" src="{{asset('/js/JQuery/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/js/Bootstrap/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/Bootstrap/bootstrap.min.css')}}">
	<style type="text/css">
	#banner {

		width: 150vh

	}
	@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


	section .section-title {
		text-align: center;
		color: #007b5e;
		margin-bottom: 50px;
		text-transform: uppercase;
	}
	#footer {
		background: #007b5e !important;
	}
	#footer h5{
		padding-left: 10px;
		border-left: 3px solid #eeeeee;
		padding-bottom: 6px;
		margin-bottom: 20px;
		color:#ffffff;
	}
	#footer a {
		color: #ffffff;
		text-decoration: none !important;
		background-color: transparent;
		-webkit-text-decoration-skip: objects;
	}
	#footer ul.social li{
		padding: 3px 0;
	}
	#footer ul.social li a i {
		margin-right: 5px;
		font-size:25px;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}
	#footer ul.social li:hover a i {
		font-size:30px;
		margin-top:-10px;
	}
	#footer ul.social li a,
	#footer ul.quick-links li a{
		color:#ffffff;
	}
	#footer ul.social li a:hover{
		color:#eeeeee;
	}
	#footer ul.quick-links li{
		padding: 3px 0;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}
	#footer ul.quick-links li:hover{
		padding: 3px 0;
		margin-left:5px;
		font-weight:700;
	}
	#footer ul.quick-links li a i{
		margin-right: 5px;
	}
	#footer ul.quick-links li:hover a i {
		font-weight: 700;
	}

	@media (max-width:767px){
		#footer h5 {
			padding-left: 0;
			border-left: transparent;
			padding-bottom: 0px;
			margin-bottom: 10px;
		}
	</style>


</head>
<header>
	<section class="container-fluid slider d-flex justify-content-center align-items-center">
		<img id="banner" src="/img/TecBanner.png" style="width: 30; height: 30;" class="img-fluid d-inline-block align-top mr-auto ml-auto">
	</section>


	<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ml-auto text-center">
				<li class="nav-item active">
					<a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Carreras
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						
						<a href="" class="dropdown-item">Contador Público</a>
						<a href="" class="dropdown-item">Ing. Ambiental</a>
						<a href="" class="dropdown-item">Ing. Civil</a>
						<a href="" class="dropdown-item">Ing. Electromecánica</a>
						<a href="" class="dropdown-item">Ing. Electrónica</a>
						<a href="" class="dropdown-item">Ing. Sistemas Computacionales</a>
						<a href="" class="dropdown-item">Ing. Gestión Empresarial</a>
						<a href="" class="dropdown-item"> Ing. Industrial</a>
						<a href="" class="dropdown-item">Ing. Mecatrónica</a>
						<a href="" class="dropdown-item">Ing. Quí­mica</a>
						<a href="" class="dropdown-item">Lic. Administración</a>
						<a href="" class="dropdown-item" >Maestrí­a en Administración Industrial</a>
						
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/Empresas">Empresas Participantes</a>
				</li>

				<li>
					@guest
					<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
					<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
					@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							<div/>

					</li>

						@endguest
						
					</li>
				</ul>


			</div>
		</nav>	
	</header>
	<body>
		<div class="container">
			@yield('content')
		</div>
	</body>
	<footer id="footertag">	

		<section id="footer" style="padding: 60px 0">
			<div class="container">
				<a href="http://www.sep.gob.mx/" target="blank" id="logo-footer" title="Instituto Tecnológico de Matamoros">
					<img src="http://www.itmatamoros.edu.mx/wp-content/themes/tecnologico/img/logoSEP_hoz.png" style="" class="img-fluid mr-auto ml-auto display: block">
				</a>
				<br>
				<br>
				<div class="row text-center text-xs-center text-sm-left text-md-left">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>

						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>

						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>

						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>						
						</ul>
					</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center text-white">
					<p>National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>			
			</div>	
			<hr>
		</section>
	</footer>

	</html>