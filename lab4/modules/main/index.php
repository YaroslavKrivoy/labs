<!DOCTYPE html>
<html>
<head>
	<title>AKAD - Creative Digital Agency HTML Template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/animsition.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="animsition">
	<!-- HEADER  -->
    <?php include 'includes/header.php' ?>
	<!-- HERO SECTION  -->
	<div class="site-hero">
		<ul class="slides">
			<li>
				<div><span class="small-title uppercase montserrat-text">we're</span></div>
				<div class="big-title uppercase montserrat-text">digital agency</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<div><span class="small-title uppercase montserrat-text">we do</span></div>
				<div class="big-title uppercase montserrat-text">creative stuff</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</li>
		</ul>
	</div>

	<!-- HISTORY OF AGENCY -->
	<div class="container">
		<div class="agency">
			<div class="col-md-5 col-sm-12">
				<div class="row">
					<img src="../../img/agency.jpg" alt="image">
				</div>
			</div>
			<div class="col-md-offset-1 col-md-6 col-sm-12">
				<div class="row">
					<div class="section-title">
						<span>history of agency</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor nisi ut aliquip ex ea commodo
						consequat. in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. 
					</p>
					<a href="#" class="btn green" style="float:right;margin-top:30px"><span>read more</span></a>
				</div>
			</div>
		</div>
	</div>


	<!-- WHY CHOOSE US -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>why choose us</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="col-md-7 col-sm-12 services-left wow fadeInUp">
				<div class="row" style="margin-bottom:50px">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-infinite-outline"></i>
							<span class="montserrat-text uppercase service-title">unlimited options</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-shuffle"></i>
							<span class="montserrat-text uppercase service-title">design &amp; development</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-cart-outline"></i>
							<span class="montserrat-text uppercase service-title">e-commerce</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-settings"></i>
							<span class="montserrat-text uppercase service-title">customizable design</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-5 col-sm-12 services-right wow fadeInUp" data-wow-delay=".1s">
				<div class="row">
					<img src="../../img/serv.jpg" alt="image">
				</div>
			</div>

		</div>
	</section>


	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>our portfolio</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
				

			<!-- categories  -->
			<div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".photography">photography</a></li>
							<li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- all works -->
			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
					<div class="col-md-4 photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp">
							<img src="../../img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".2s">
							<img src="../../img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".3s">
							<img src="../../img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion ads">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".4s">
							<img src="../../img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 graphics ads">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".5s">
							<img src="../../img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 logo web photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".6s">
							<img src="../../img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".7s">
							<img src="../../img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 web fashion photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".8s">
							<img src="../../img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".9s">
							<img src="../../img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
				</div>
				<!-- end row -->
			</div>
			<!-- all works end -->
		</div>
		<!-- end container -->
	</section>
	<!-- portfolio -->

	<!-- newsletter -->
    <?php include 'includes/newsletter.php' ?>


	<!-- FOOTER -->
    <?php include 'includes/footer.php' ?>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/smoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			new WOW().init();

			// initialise flexslider
			$('.site-hero').flexslider({
				animation: "fade",
				directionNav: false,
				controlNav: false, 
				keyboardNav: true,
				slideToStart: 0,
				animationLoop: true,
				pauseOnHover: false,
				slideshowSpeed: 4000, 
			});


			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});
		 
			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			}); 
		});
	</script>
</body>
</html>