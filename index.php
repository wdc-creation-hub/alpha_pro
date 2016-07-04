<?php include "admin/db/connect.php"; 
$query="SELECT * FROM event LIMIT 2";
$queryn="SELECT * FROM news LIMIT 2";
$result = $db->query($query);
$resultn = $db->query($queryn);
?>
	<?php
	include 'includes/meta.php'; ?>
		<title>CESS | Computer Engineering Student Society</title>
		<script src="scripts/jquery.min.js"></script>
		<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css">
		<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="styles/animate.min.css" type="text/css">
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/grid.css">
		<link rel="stylesheet" href="styles/owl.carousel.css">
		<link rel="stylesheet" href="styles/owl.theme.css">
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
			.pred {
				color: #ce3030;
				text-shadow: 0 0;
				font-size: 27px !important
			}
			
			.cess-footer-o {
				position: static;
			}
		</style>
		</head>

		<body>
			<div class="loader"> </div>
			<?php include 'includes/nav-h.php'; ?>
				<div class="wrap">
					<div class="animated flip big anim">CESS</div>
					<p class="wow fadeInDown cess-p" data-wow-duration="1s" data-wow-delay="0.31s">It is all about you</p>
					<div class="cess-content animated slideInUp anim" style="width:100%; margin:30px auto">
						<div class="grid-col grid-col--6-of-12 grid-col--centered grid-col">
							<div class="owl-carousel owl-theme">
								<div><img src="images/cess.jpg"></div>
								<div><img src="images/main-s.jpg"></div>
								<div><img src="images/2.JPG"></div>
							</div>
						</div>
						<div class="grid-col grid-col--6-of-12 grid-col--centered grid-col">
							<!--<a href="about.html" class="text-center block">You name it and you get it in cess <span class="ion-chevron-right"></span></a>-->
							<p class="cess-p" style="font-size:13px">Cess is aimed at conducting events that are technical, creative as well as literary which continually helps the students to brush up their skills in all fields. </p>
							<a href="tour.html" clickey="slideOutLeft">
								<div class="cess-btn grid-col grid-col--6-of-12">Quick Tour</div>
							</a>
							<a href="activities.php">
							<div  class="cess-btn show-news grid-col grid-col--6-of-12">Latest Activities</div>
							</a>
						</div>
					</div>
					<div class="alt-body show2" id="eve">
						<h3 class="text-center">Latest Events</h3>
						<div id="useit" class="content-section-a">
								<div class="container-fluid">
							</center>
							
									<?php 
					if($result->num_rows>0) {
						while($row = $result->fetch_assoc()) {
							?>
					
					<div class="thumbnail col-md-6" data-load="event-view?id=<?php echo $row['id'];?>">
					<p class="wow tada text-center ion-calendar"> <?php echo date("d M",strtotime($row['startd']));?> - <?php echo date("d M",strtotime($row['endd']));?></p>
					<img src="admin/images/cessup/<?php echo $row['image'];?>" class="img-responsive" style="padding:10px;height:300px">
					<p class="text-center"><?php echo $row['title'];?> - <small class="text-center"><?php echo $row['team'];?></small></p>
						
					</div>
				
					<?php
						}
					} else {
						echo '<style>#eve {display:none;}</style>';
					}
				
				?> 	</center>
							</div>
						</div>
						<div class="text-right" data-load="events"> View All <span class="ion-chevron-right"></span></div>
					</div>
					<div class="alt-body show2" id="act">
						<h3 class="text-center">Latest Activities</h3>
						<div id="useit" class="content-section-a">
							<div class="container-fluid">
							</center>
							
									<?php 
					if($resultn->num_rows>0) {
						while($row = $resultn->fetch_assoc()) {
							?>
					
					<div class="thumbnail col-md-6" data-load="activities-view?id=<?php echo $row['id'];?>">
					<p class="wow tada text-center ion-calendar"> <?php echo date("d M",strtotime($row['date']));?></p>
					<img src="admin/images/cessup/<?php echo $row['image'];?>" class="img-responsive" style="padding:10px;height:300px">
					<p class="text-center"><?php echo $row['title'];?></p>
				
					</div>
				
					<?php
						}
					} else {
						echo '<style>#act {display:none;}</style>';
					}
				
				?> 	</center>
							</div>
						</div>
						<div class="text-right" clickey="none" click-load="activities"> View All <span class="ion-chevron-right"></span></div>
					</div>
				</div>
				<?php include 'includes/footer.php'; ?>
					<script src="scripts/bootstrap.min.js"></script>
					<script src="scripts/jquery.fittext.js"></script>
					<script src="scripts/owl.carousel.js"></script>
					<script>
						$(".big").fitText(0.8, {
							minFontSize: '56px'
							, maxFontSize: '140px'
						});
						$("p").fitText(1.3, {
							minFontSize: '14px'
							, maxFontSize: '30px'
						});
						$(document).ready(function () {
							$('.owl-carousel').owlCarousel();
						});
						var owl = $('.owl-carousel');
						owl.owlCarousel({
							animateOut: 'fadeOutDown'
							, animateIn: 'fadeInDown'
							, items: 1
							, dots: true
							, loop: true
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
					</script>
					<script src="scripts/main.js"></script>
		</body>

		</html>