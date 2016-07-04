<?php
	require ('admin/db/connect.php');
	
	$query = "SELECT * FROM event";
	$result = $db->query($query);

	include 'includes/meta.php'; ?>
	<script src="scripts/jquery.min.js"></script>
	<title>Latest Activities</title>

	<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css">
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">

	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	
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
			
		</div>
		<div class="container-fluid">
			<h1 class="cess-p" style="font-size:33px">Latest Events</h1>
			<div class="alt-body" style="padding:10px">
				<div class="owl-carousel">
					<?php 
						if($result->num_rows) {
							while($row =$result->fetch_assoc()) {
								?>
						<div class="act-con over" data-load="event-view?id=<?php echo $row['id'];?>">
							<div class="div-overlay">
								<span class="inner-lay ion-ios-book"> More</span>
							</div>
							<img src="admin/images/cessup/<?php echo $row['image'];?>">
							<p class="caption"><?php echo $row['title'];?></p>
						</div>
					
					<?php
							}
						}
					
					else {
						echo "<h5 class='text-center'>No Latest Events</h5>"; 
					}
					$db->close();
					?>
						
						
				</div>
			</div>
			<div style="margin:auto;margin-bottom:20px;self-align:center">
				<h1 class="cess-p" style="font-size:33px">All Events</h1>
				
				<?php 
				require('admin/db/connect.php');
				$query = "SELECT * FROM event";
				$result = $db->query($query);
						if($result->num_rows) {
							while($row =$result->fetch_assoc()) {
				?>
				
				<div class="alt-body over col-md-4 thumbnail" data-load="event-view?id=<?php echo $row['id'];?>">
					<div class="div-overlay">
						<span class="inner-lay ion-ios-book"> More</span>
					
					</div>
					<p class="wow tada text-center ion-calendar"> <?php echo date("d M",strtotime($row['startd']));?> - <?php echo date("d M",strtotime($row['endd']));?></p>
					<img src="admin/images/cessup/<?php echo $row['image'];?>" class="img-responsive" style="padding:10px;height:300px">
					<p class="text-center"><?php echo $row['title'];?></p>
				
				</div>
				<?php
							}
						} 
								
					?>
						
			</div>
		</div>
			<?php include 'includes/footer.php';?>
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