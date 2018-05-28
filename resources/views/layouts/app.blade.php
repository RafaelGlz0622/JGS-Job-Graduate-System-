

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



	
	<!-- <script type="text/javascript" src="{{asset('/js/JQuery/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/js/Bootstrap/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/Bootstrap/bootstrap.min.css')}}">
-->
<style type="text/css">

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


</style>


</head>
<!-- <header>
	<section class="container-fluid slider d-flex justify-content-center align-items-center">
		<img id="banner" src="/img/TecBanner.png" style="width: 30; height: 30;" class="img-fluid d-inline-block align-top mr-auto ml-auto">
	</section>


	<nav class="navbar navbar-dark  bg-dark navbar-expand-lg  bg-light">

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
							<a class="dropdown-item" href="Pages/MyAccount"> My Dashboard
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
	

	</html> -->


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\pace-master\themes\blue\pace-theme-flash.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\uniform\css\uniform.default.css">
	<link href="\ModernPlugins\plugins\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\fontawesome\css\font-awesome.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\line-icons\simple-line-icons.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\offcanvasmenueffects\css\menu_cornerbox.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\waves\waves.min.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\switchery\switchery.min.css">
	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\3d-bold-navigation\css\style.css">


	<link rel="stylesheet" type="text/css" href="\ModernPlugins\plugins\slidepushmenus\css\component.css">

	
	<link rel="stylesheet" type="text/css" href="\css\Modern\modern.css">

	<link rel="stylesheet" class="theme-color" rel="stylesheet" type="text/css" href="\css\Modern\themes\green.css">
	<link rel="stylesheet" type="text/css" href="\css\Modern\custom.css">

	<script type="text/javascript" src="\ModernPlugins\plugins\3d-bold-navigation\js\modernizr.js"></script>
	<script type="text/javascript" src="\ModernPlugins\plugins\offcanvasmenueffects\js\snap.svg-min.js"></script>


	<body class="page-header-fixed">
		<div class="overlay"></div>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
			<h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
			<div class="slimscroll">
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
				<a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
			</div>
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
			<h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
			<div class="slimscroll chat">
				<div class="chat-item chat-item-left">
					<div class="chat-image">
						<img src="assets/images/avatar2.png" alt="">
					</div>
					<div class="chat-message">
						Hi There!
					</div>
				</div>
				<div class="chat-item chat-item-right">
					<div class="chat-message">
						Hi! How are you?
					</div>
				</div>
				<div class="chat-item chat-item-left">
					<div class="chat-image">
						<img src="assets/images/avatar2.png" alt="">
					</div>
					<div class="chat-message">
						Fine! do you like my project?
					</div>
				</div>
				<div class="chat-item chat-item-right">
					<div class="chat-message">
						Yes, It's clean and creative, good job!
					</div>
				</div>
				<div class="chat-item chat-item-left">
					<div class="chat-image">
						<img src="assets/images/avatar2.png" alt="">
					</div>
					<div class="chat-message">
						Thanks, I tried!
					</div>
				</div>
				<div class="chat-item chat-item-right">
					<div class="chat-message">
						Good luck with your sales!
					</div>
				</div>
			</div>
			<div class="chat-write">
				<form class="form-horizontal" action="javascript:void(0);">
					<input type="text" class="form-control" placeholder="Say something">
				</form>
			</div>
		</nav>

		
		<form class="search-form" action="#" method="GET">
			<div class="input-group">
				<input type="text" name="search" class="form-control search-input" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
				</span>
			</div><!-- Input Group -->
		</form><!-- Search Form -->
		<main class="page-content content-wrap">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="sidebar-pusher">
						<a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="logo-box">
						<a href="/home" class="logo-text"><span>Journs</span></a>
					</div><!-- Logo Box -->
					<div class="search-button">
						<a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
					</div>
					<div class="topmenu-outer">
						<div class="top-menu">
							<ul class="nav navbar-nav navbar-left">
								<li>		
									<a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
								</li>

								
								
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>	
									<a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
									<ul class="dropdown-menu title-caret dropdown-lg" role="menu">
										<li><p class="drop-title">You have 4 new  messages !</p></li>
										<li class="dropdown-menu-list slimscroll messages">
											<ul class="list-unstyled">
												<li>
													<a href="#">
														<div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
														<p class="msg-name">Sandra Smith</p>
														<p class="msg-text">Hey ! I'm working on your project</p>
														<p class="msg-time">3 minutes ago</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
														<p class="msg-name">Amily Lee</p>
														<p class="msg-text">Hi David !</p>
														<p class="msg-time">8 minutes ago</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
														<p class="msg-name">Christopher Palmer</p>
														<p class="msg-text">See you soon !</p>
														<p class="msg-time">56 minutes ago</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
														<p class="msg-name">Nick Doe</p>
														<p class="msg-text">Nice to meet you</p>
														<p class="msg-time">2 hours ago</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
														<p class="msg-name">Sandra Smith</p>
														<p class="msg-text">Hey ! I'm working on your project</p>
														<p class="msg-time">5 hours ago</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
														<p class="msg-name">Amily Lee</p>
														<p class="msg-text">Hi David !</p>
														<p class="msg-time">9 hours ago</p>
													</a>
												</li>
											</ul>
										</li>
										<li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
									<ul class="dropdown-menu title-caret dropdown-lg" role="menu">
										<li><p class="drop-title">You have 3 pending tasks !</p></li>
										<li class="dropdown-menu-list slimscroll tasks">
											<ul class="list-unstyled">
												<li>
													<a href="#">
														<div class="task-icon badge badge-success"><i class="icon-user"></i></div>
														<span class="badge badge-roundless badge-default pull-right">1min ago</span>
														<p class="task-details">New user registered.</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
														<span class="badge badge-roundless badge-default pull-right">24min ago</span>
														<p class="task-details">Database error.</p>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
														<span class="badge badge-roundless badge-default pull-right">1h ago</span>
														<p class="task-details">Reached 24k likes</p>
													</a>
												</li>
											</ul>
										</li>
										<li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
										<span class="user-name">David<i class="fa fa-angle-down"></i></span>
										<img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
									</a>
									<ul class="dropdown-menu dropdown-list" role="menu">
										<li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
										<li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
										<li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
										<li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
									</ul>
								</li>
								w
								<li>
									<a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
										<i class="fa fa-comments"></i>
									</a>
								</li>
							</ul><!-- Nav -->
						</div><!-- Top Menu -->
					</div>
				</div>
			</div><!-- Navbar -->
			<div class="page-sidebar sidebar">
				<div class="page-sidebar-inner slimscroll">
					<div class="sidebar-header">
						<div class="sidebar-profile">
							<a href="/Pages/MyAccount" id="">
								<div class="sidebar-profile-image">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3ub9pAdXyp3SunhYlBjGcqu82RL20pRSumjUnJ3e2tRiF_bS4" class="img-circle img-responsive" alt="">
								</div>
								<div class="sidebar-profile-details">
									<span>David Green<br><small>Art Director</small></span>
								</div>
							</a>
						</div>
					</div>
					<ul class="menu accordion-menu">

						<li><a href="/home" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Inicio</p></a></li>

						<li class="active"><a href="/Pages/MyAccount" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Perfil</p></a></li>
						
						<li><a  href="/Empresas" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Empresas Participantes</p></span></a>

						</li>
					

						
						<li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Tables</p><span class="arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="table-static.html">Static Tables</a></li>
								<li><a href="table-responsive.html">Responsive Tables</a></li>
								<li><a href="table-data.html">Data Tables</a></li>
							</ul>
						</li>

					</ul>
				</div><!-- Page Sidebar Inner -->
			</div><!-- Page Sidebar -->
			<div class="page-inner">

				<div id="main-wrapper">

					@yield('content')

				</div>
				<div class="page-footer">
					<p class="no-s">2018 &copy; Journs by Juan Rafael Gonzalez Alvarado.</p>
				</div>
			</div><!-- Page Inner -->
		</main><!-- Page Content -->
		<nav class="cd-nav-container" id="cd-nav">
			<header>
				<h3>Navigation</h3>
				<a href="#0" class="cd-close-nav">Close</a>
			</header>
			<ul class="cd-nav list-unstyled">
				<li class="cd-selected" data-menu="index">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-home"></i>
						</span>
						<p>Dashboard</p>
					</a>
				</li>
				<li data-menu="profile">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-user"></i>
						</span>
						<p>Profile</p>
					</a>
				</li>
				<li data-menu="inbox">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-envelope"></i>
						</span>
						<p>Mailbox</p>
					</a>
				</li>
				<li data-menu="#">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-tasks"></i>
						</span>
						<p>Tasks</p>
					</a>
				</li>
				<li data-menu="#">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-cog"></i>
						</span>
						<p>Settings</p>
					</a>
				</li>
				<li data-menu="calendar">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-calendar"></i>
						</span>
						<p>Calendar</p>
					</a>
				</li>
			</ul>
		</nav>
		<div class="cd-overlay"></div>


		<!-- Javascripts -->
		<script src="\ModernPlugins\plugins\jquery\jquery-2.1.4.min.js"></script>
		<script src="\ModernPlugins\plugins\jquery-ui\jquery-ui.min.js"></script>
		<script src="\ModernPlugins\plugins\pace-master\pace.min.js"></script>
		<script src="\ModernPlugins\plugins\jquery-blockui\jquery.blockui.js"></script>
		<script src="\ModernPlugins\plugins\bootstrap\js\bootstrap.min.js"></script>
		<script src="\ModernPlugins\plugins\jquery-slimscroll\jquery.slimscroll.min.js"></script>
		<script src="\ModernPlugins\plugins\switchery\switchery.min.js"></script>
		<script src="\ModernPlugins\plugins\uniform\jquery.uniform.min.js"></script>
		<script src="\ModernPlugins\plugins\offcanvasmenueffects\js\classie.js"></script>
		<script src="\ModernPlugins\plugins\offcanvasmenueffects\js\main.js"></script>
		<script src="\ModernPlugins\plugins\waves\waves.min.js"></script>
		<script src="\ModernPlugins\plugins\3d-bold-navigation\js\main.js"></script>
		<script src="\js\Modern\modern.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzjeZ1lORVesmjaaFu0EbYeTw84t1_nek"></script>
		<script src="\js\Modern\pages\profile.js"></script>

	</body>

	</html>