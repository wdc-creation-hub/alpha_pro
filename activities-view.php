<?php
	require ('admin/db/connect.php');
   if(isset($_GET['id'])) {
	   $id = $_GET['id'];
	   $query = "SELECT * FROM news where id='$id'";
	   $result =$db->query($query);
	   $data = $result->fetch_array();
	   if($data==null) {
		    header('location:index');
	   }
   } else {
	   header('location:index');
   }


	include 'includes/meta.php'; ?>
	<script src="scripts/jquery.min.js"></script>
	<title>
		Activity | <?php echo $data['title']; ?>
	</title>
	<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css">
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/animate.min.css" type="text/css">
	<link rel="stylesheet" href="styles/grid.css">
	<link rel="stylesheet" href="styles/map.css">
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
	<link href="styles/main.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYJMIU2Gnz1ZrpymtUGhfAhH-XOGr-jzg&callback=initMap">
	</script>
	<script src="//platform.linkedin.com/in.js" type="text/javascript">
		lang: en_US
	</script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>

	<body class="colorido-o">
		<div id="load">
			<div id="fb-root"></div>
			<script>
				(function (d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1643878145834610";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<script src="https://apis.google.com/js/platform.js" async defer></script>
			</head>

			<body>
				<div class="loader"> </div>
				<?php include 'includes/nav.php'; ?>
					<div class="alt-body">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<h3 class="text-center"><?php echo $data['title']; ?></h3> 
									<p class="text-center">
										<?php echo date("d M, y",strtotime($data['date']));?>
									</p>
								</div><hr>
								<center><img class="img-responsive"  src="admin/images/cessup/<?php echo $data['image'];?>"></center>
								<h3 class="text-center"><?php echo $data['title']; ?></h3>
								
								<hr>
								<p><?php echo $data['content']; ?></p>
							</div>
						</div>
						<hr>
						<div class="col-md-12 col-sm-12" style="display:flex;justify-content:space-around">
							<div class="g-plus" data-action="share" data-annotation="bubble" data-href="http://www.cessgndu.com/activities-view?id=<?php echo $data['id'];?>"></div>
							<div class="fb-share-button" data-href="http://www.cessgndu.com/activities-view?id=<?php echo $data['id'];?>'" data-layout="button" data-mobile-iframe="true">
								<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a>
							</div>
							<script type="IN/Share" data-url="http://www.cessgndu.com/activities-view/id=<?php echo $data['id'];?>"></script> <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
							<script>
								! function (d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0]
										, p = /^http:/.test(d.location) ? 'http' : 'https';
									if (!d.getElementById(id)) {
										js = d.createElement(s);
										js.id = id;
										js.src = p + '://platform.twitter.com/widgets.js';
										fjs.parentNode.insertBefore(js, fjs);
									}
								}(document, 'script', 'twitter-wjs');
							</script>
						</div>
						</span>
						<div class="fb-comments colorido-t" data-width="100%" data-href="http://www.cessgndu.com/activities-view<?php echo $data['title'].$data['id'];?>" data-numposts="10"></div>
					</div>
		</div>
		</div>
		</div>
		</div>
		<?php include 'includes/footer.php'; ?>
			<script src="scripts/bootstrap.min.js"></script>
			<script src="scripts/jquery.fittext.js"></script>
			<script src="scripts/main.js"></script>
			</body>

			</html>