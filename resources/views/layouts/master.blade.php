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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="css/responsive.css" rel="stylesheet">
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
					<a href="index.html"><img src="images/logo.png" alt="3">
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
		<div class="menu-section 1">
			<div class="container">
				<div class="row">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="1" />
						</a>
					</div>
					<div class="menu-bar">
						<ul>
							<li><a href="aminities1.html">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		
	</section>
	<!--HEADER SECTION-->
	@include('partials.habitaciones')
	<!--END HEADER SECTION-->
	<section class="copy">
		<div class="container">
			<p>copyrights © 2022 &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>
	<!--ALL SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>

</html>