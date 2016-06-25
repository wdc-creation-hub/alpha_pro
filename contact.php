<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="scripts/jquery.min.js"></script>
	<title>Contact Us</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css">

	<!-- Custom Fonts -->
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="styles/animate.min.css" type="text/css">
	<link rel="stylesheet" href="styles/grid.css">


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
	<link href="styles/set.css" rel="stylesheet" type="text/css">
	<link href="styles/main.css" rel="stylesheet" type="text/css">
	

</head>
<style>
      #map {
        height: 100% !important;
      }
</style>
<body>
	<script>
  function CoordMapType(tileSize) {
        this.tileSize = tileSize;
      }

      CoordMapType.prototype.getTile = function(coord, zoom, ownerDocument) {
        var div = ownerDocument.createElement('div');
        div.innerHTML = coord;
        div.style.width = this.tileSize.width + 'px';
        div.style.height = this.tileSize.height + 'px';
        div.style.fontSize = '10';
        div.style.borderStyle = 'solid';
        div.style.borderWidth = '1px';
        div.style.borderColor = '#AAAAAA';
        return div;
      };

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 41.850, lng: -87.650}
        });

        // Insert this overlay map type as the first overlay map type at
        // position 0. Note that all overlay map types appear on top of
        // their parent base map.
        map.overlayMapTypes.insertAt(
            0, new CoordMapType(new google.maps.Size(256, 256)));
      }
    </script>

	<div class="loader">
		<!--<h3>Loading Awesomeness.....</h3>-->
	</div>
	<?php include 'includes/nav.php'; ?>
		<div class="alt-body">
			<div class="row input-container">
				<div class="col-md-6">
					<h4 class="text-center">Reach us out here</h4>
					<div id="map"></div>	
				</div>
				<div class="col-md-6">
					<h4 class="text-center">Be in touch with us.</h4>
					<form id="contact" method="post">
						<div class="col-xs-12">

							<div class="styled-input wide">
								<input name="name" type="text" class='' required />
								<label>Name</label>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="styled-input">
								<input name="email" type="text" class='' required />
								<label>Email</label>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="styled-input">
								<input name="contact" type="text" class='' required />
								<label>Phone Number</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="styled-input wide">
								<textarea name="message" required class=""></textarea>
								<label>Message</label>
							</div>
						</div>
						<h5 id="msg" class="text-center"></h5>
						<div class="col-xs-12 col-md-3 pull-right">
							<input type="submit" id="msgsnd" name="submit" class="submit-btn" value="Send">
						</div>
					</form>
					<br>
					<br>
				</div>
			</div>
			<div id="aftermsg" style="display:none">
				<h3 class="text-center">Thankyou! Your Message Was Successfully Sent. <br> We will soon contact You </h3>
			</div>

		</div>

		<script src="scripts/bootstrap.min.js"></script>
		<script src="scripts/jquery.fittext.js"></script>

		<script>
			$(".head-text").fitText(0.8, { minFontSize: '56px', maxFontSize: '92px' });
			$("p").fitText(1.3, { minFontSize: '14px', maxFontSize: '30px' });
			
	 		$('#msgsnd').click(function(e) {
				e.preventDefault();
				$data = $('#contact').serialize();
				$("#msgsnd").val("Sending");
				$.post('functions/mail.php',$data, request);
			});
	
			
			
		
		function request(res) {
			
			 if(res===1) {
		
			$('#contact').addClass('animated flipOutY').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
	              function() {
						$('#aftermsg').addClass('animated zoomIn').css('display','block');
					$('#contact').removeClass('animated flipOutY').css('display','none');
				
	              });
			 }
		
			else {
			
			 $("#msg").html(res);
			   $("#msgsnd").val("Send").addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
	              function() {
	                $('#submit').removeClass('animated shake');
	              });
			}
	
			
	
	 	}
		</script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA8l4cuBe8eqse-Dd6-s9JSGPzi3_5Wy9M&callback=initMap"
    async defer></script>
		<script src="scripts/main.js"></script>

</body>

</html>