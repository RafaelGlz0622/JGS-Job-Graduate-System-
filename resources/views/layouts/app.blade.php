<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
	<title></title>

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
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
					Dropdown
				</a>
			</form>
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
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
			</hr>
		</div>	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p>National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
				<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
			</div>			
		</div>	
		<hr>
	</section>
</footer>

</html>