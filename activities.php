<?php
	include 'includes/meta.php'; ?>
	<script src="scripts/jquery.min.js"></script>
	<title>Latest Activities</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css">
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<!-- Custom Fonts -->
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<!-- Plugin CSS -->
		<link href="styles/main.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="styles/animate.min.css" type="text/css">
	<link rel="stylesheet" href="styles/grid.css">
	<link rel="stylesheet" href="styles/owl.carousel.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="scripts/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>

	<style>
		.caption {
			text-align: center;
			position: absolute;
			bottom: 0;
			background-color: #fff;
			z-index: 9999;
			self-align: center;
			width: 100%
		}
		
		.cess-set {
			margin:10px auto;
			padding: 20px
		}
	.grid {
  list-style: none;
  margin: -100px !important 
}
	
.grid-col {
 
  padding: 20px;
}
		

.alt-body {
			margin:20px auto
		}
	</style>

	</head>

	<body>
	<?php include 'includes/nav.php'; ?>

		<div class="loader">
			<!--<h3>Loading Awesomeness.....</h3>-->
		</div>
	
				<h1 class="cess-p" style="font-size:33px">Recent Activities</h1>
			<div class="alt-body" style="padding:10px">
				<div class="owl-carousel">
					<?php 
				for ($i=0;$i<8;$i++) {
					
				?>
						<div class="act-con over" data-load="test">
							<div class="div-overlay">
								<span class="inner-lay ion-ios-book"> Read</span>
							</div>
							<img src="http://dummyimage.com/600x400/000/fff">
							<p class="caption">This is Dummy text hay this long one hey kdhksdhjkls</p>
						</div>
						<?php } ?>
				</div>
			</div>
			<div class="" style="margin:auto;self-align:center">
				<h1 class="cess-p" style="font-size:33px">All Activities</h1>
				
				<?php 
				for ($i=0;$i<8;$i++) {
					
				?>
				
				<div class="alt-body over col-md-4 thumbnail" data-load="test">
					<div class="div-overlay">
						<span class="inner-lay ion-ios-book"> Read</span>
					
					</div>
					<p class="wow tada text-center ion-calendar"> 27 June, 2016</p>
					<img src="images/portfolio/1.JPG" class="img-responsive" style="padding:10px">
					<p class="text-center"></p>
				
				</div>
						
						<?php } ?>
			</div>
			<script src="scripts/owl.carousel.js"></script>
			<script>
				
				$(document).ready(function () {
					$('.owl-carousel').owlCarousel();
				});

				var owl = $('.owl-carousel');


				if ($(window).width() < 548) {
					count = 1;
				} else {
					count = 3;
				}


				owl.owlCarousel({
					items: count
					, dots: true
					, margin: 10
					, autoplay: true
					, autoplayTimeout: 3000
					, autoplayHoverPause: true
				});
				$('.play').on('click', function () {
					owl.trigger('autoplay.play.owl', [3000])
				})
				$('.stop').on('click', function () {
					owl.trigger('autoplay.stop.owl')
				})
				
				$(".over").mouseenter(function() {
					$(this).children( ".div-overlay" ).css({ 
						"z-index":"9999",
						"transform": "scale(1)"
				  });				
				});
				
				$(".over").mouseleave(function() {
					$(this).children( ".div-overlay" ).css({ 
						"z-index":"-9999",
						"transform": "scale(0)"
				  });
				
				
				})
				
				$('div[data-load]').css('cursor','pointer');
				$('div[data-load]').click(function() {
					$load= this.getAttribute('data-load');
					window.location.href=$load;
				});
				
				
			</script>
			<script src="scripts/main.js"></script>

	</body>

	</html>