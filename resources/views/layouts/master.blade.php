<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- ALL CSS FILES -->
	<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body data-ng-app="">
	<!--MOBILE MENU-->
	<section>
		<div class="mm">
			<div class="mm-inn">
				<div class="mm-logo">
					<a href="{{route('home')}}"><img src="{{ asset('images/lobby-dark.png') }}" alt="3">
					</a>
				</div>
				<div class="mm-icon"><span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
				</div>
				<div class="mm-menu">
					<div class="mm-close"><span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
					</div>
					<ul>
						<li><a href="index.html">Login 1</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="home-block">
		<!--TOP SECTION-->
		<div class="menu-section">
			<div class="container">
				<div class="row">
					<div class="logo">
						<a href="{{route('home')}}"><img src="{{ asset('images/lobby-dark.png') }}" alt="1" />
						</a>
						<div class="menu-bar">
						<ul>
							 @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.ventas') }}">
                                        Administrador
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                       	 @endguest
						</ul>
					</div>
					</div>
					
				</div>
			</div>
		</div>
		@yield('banner')
		@yield('disponibilidad')
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		
	</section>
	<!--HEADER SECTION-->
	@yield('container')
	<!--END HEADER SECTION-->
	<section class="copy">
		<div class="container">
			<p>copyrights © 2022 &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>
	<!--ALL SCRIPT FILES-->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/angular.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/materialize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery.mixitup.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>