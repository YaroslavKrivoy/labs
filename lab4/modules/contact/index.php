<!DOCTYPE html>
<html>
<head>
	<title>Contact us - AKAD - Creative Digital Agency HTML Template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/animsition.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="animsition">
	<!-- HEADER  -->
    <?php include 'includes/header.php' ?>

	<!-- HERO SECTION  -->
	<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">Contact us</div>
			<div class="small-title montserrat-text uppercase">home / contact</div>
		</div>
	</div>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<form action="#" method="post">
							<div class="col-md-6">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="name">
									<span>your name</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="email">
									<span>your email</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="object">
									<span>object</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="textarea_1" style="margin-bottom:30px">
									<textarea name="message"></textarea>
									<span>message</span>
								</div>
							</div>
							<div class="col-md-12">
								<a href="#" class="btn green"><span>send</span></a>
							</div>
						</form>
					</div>

					<h4 class="montserrat-text uppercase" style="margin-top:100px">contact info</h4>
					<p>Lorem ipsum dolor sit amet, conse adipisicing elit. Libero incidunt quod ab mollitia quia dolorum conse.</p>
					
					<p>
						13D, Functional apartment, Unique colony, <br/>
						Agadir 86360 <br/>
						+212 124-566-780 <br/>
						+212 124-566-780<br/>
						<div><a href="mailto:email@website.com" class="link">email@website.com</a></div>
					</p>

					<ul class="social-icons" style="margin-top:30px;">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div><!-- end col -->

				<div class="col-md-6">
					<div id="map" style="width:100%"></div>
				</div>

			</div>
		</div>
	</section>


    <!-- newsletter -->
    <?php include 'includes/newsletter.php' ?>


    <!-- FOOTER -->
    <?php include 'includes/footer.php' ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/smoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<script type="text/javascript">
		// initialize google maps
		google.maps.event.addDomListener(window, 'load', initialize);
		function initialize() {
			var mapOptions = {
				zoom: 11,
				center: new google.maps.LatLng(40.6700, -73.9400), // New York
				scrollwheel: false,
				styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			};

			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({
			    position: new google.maps.LatLng(40.6700, -73.9400),
			    map: map,
				icon: 'assets/img/map.png',
			    title: 'Find us here!'
			});
		}
		$(window).load(function(){
			new WOW().init();
			$("#map").css("height",$("#map").parent().parent().height() + "px");
		});
	</script>
</body>
</html>