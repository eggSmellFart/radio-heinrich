<?php
	$h1 = 'Kompetenzen';
	$h2 = 'Unsere';
	$kompetenzen = [
		"1" => "Bewegungsapparat",
		"2" => "Prostatadiagnostik",
		"3" => "Herzdiagnostik",
		"4" => "Brustdiagnositk",
		"5" => "Neuroradiologie",
		"6" => "Turmordiagnostik",
		"7" => "Schmerz- und Strahlentherapie",
		"8" => "Brustdiagnostik",
	];
$kompetenzen_untertitel =  [
					"1" => "(MRT)",
					"2" => "(MRT)",
					"3" => "Szintigraphie",
				];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Services | Canvas</title>

</head>



<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap" class="row">
				
				<div class="container col-8">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						
						<?php include 'custom_sections/logo.php'; ?>

						<div class="header-misc">
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<?php include 'custom_sections/nav.php'; ?>

						<!-- <form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form> -->

					</div>
				</div>
				
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
	
		<!-- Page Title
		============================================= -->
		<!-- <section id="page-title"> -->
		<?php include 'custom_sections/kompetenzen_startpage.php'; ?>


		<!-- Content Tabs Kompetenzen
		============================================= -->
		<section class="tab-content">
		
			<?php include 'custom_sections/kompetenzen/herzdiagnostik.php'; ?>
			<?php include 'custom_sections/kompetenzen/bewegungsapparat.php'; ?>
		
		</section>
		


		<!-- Footer
		============================================= -->
		<?php include 'custom_sections/footer.php' ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
	<!-- Simple Parallax github
	============================================= -->
	<script src="parallax_js/parallax.js"></script>

	<script>
		$('.parallax-window').parallax({
			imageSrc: 'images/terminvergabe.png',
			naturalWidth: 1680,
    		naturalHeight: 350
		});

		console.log($('.parallax-window').data());

		$('#oc-slider').owlCarousel({
			loop:true,
			margin:10,
			items:2,
			
		});
		// $('.impressionen-img').each(function() {
		// 	$(this).width($(this)[0].naturalWidth));

		// })
		
		$('#oc-slider-2').owlCarousel({
			loop:true,
			margin:10,
			items:6,
			autoWidth: true,
		});


		$('.kompetenzen-startpage .kompetenzen-component-container').on('click', function (e) {
			e.preventDefault()
			console.log($(this));
			$(this).tab('show')
		});
		$(".nav-tabs .nav-item ").click(function() {
			$(".nav-tabs .nav-item ").removeClass('active');
		});
	</script>

</body>
</html>

