
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>CONSULTORIO DENTAL | COMINTANCILLO</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Pearly Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<link href="View/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="View/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="View/css/jquery-ui.css" />
	<link href="View/css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="View/css/owl.carousel.css" rel="stylesheet">
	<link href="View/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--Online-fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!--//Online-fonts-->
</head>

<body>


      <?php
      $dental = new Dental();
      $dental -> enlacesPaginas();
      ?>
	<!-- //team-->
	<!-- testimonials -->

	<!-- testimonials -->

	<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			<!-- Map -->
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2199.4018448445013!2d8.300581316012691!3d56.546939980773224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464a23dbbf6968cb%3A0xb0923027d6b875bb!2sHospital+Bunker!5e0!3m2!1sen!2sin!4v1519022418987"></iframe>
			</div>
			<!-- //Map -->
			<div class="w3ls_footer_grids">

				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p>7620 Lemvig, Denmark</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<p>
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Us</h4>
							<p>(+000) 003 003 0052</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- //footer -->
	<!-- copyright -->
	<div class="wthree_copy_right">
		<div class="container">
			<p>© 2018 Pearly Care. All rights reserved | Design by
				<a href="#">W3layouts</a>
			</p>

		</div>
	</div>
	<!-- //copyright -->
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- js -->
	<script type='text/javascript' src='View/js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- requried-jsfiles-for owl -->
	<script src="View/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<script src="View/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="View/js/main.js"></script>
	<!--//search-bar-->
	<!-- Calendar -->
	<script src="View/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- Gallery-script -->
	<script src="View/js/simpleLightbox.js"></script>
	<script>
		$('.gallery-columns a').simpleLightbox();
	</script>
	<!-- //Gallery-script -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="View/js/move-top.js"></script>
	<script type="text/javascript" src="View/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="View/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->




</body>

</html>