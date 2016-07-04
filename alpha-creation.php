
<html>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="wdc">
   <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
	
	<head>
	<title>CESS GNDU</title>
	<style>
/* line 2, C:/xampp/htdocs/creationhub/alpha_pro_f/styles/main.sass */
	.loader {
		  position: fixed;
		  left: 0px;
		  top: 0px;
		  width: 100%;
		  height: 100%;
		  opacity:0.18;
		  background: url("images/logo/logo-1.png") 50% 50% no-repeat #f9f9f9; }
/* line 10, C:/xampp/htdocs/creationhub/alpha_pro_f/styles/main.sass */
	 h4 {
		    position: absolute;
		    text-align: center;
		    width: 100%;
		    height: 100%;
		    z-index: 20;
		    top: 75%;
		    font-size:25px;
		    font-family: 'Satisfy', cursive;
		    font-weight: 800;
		    color:white;
		     }
		    body {
		    	overflow:hidden;
		    	background-image:url('http://cdn.pcwallart.com/images/universe-wallpaper-2.jpg');
		    	background-size:cover
		    }
		    .loader {
			  animation-duration: 3s;
			 animation-delay: 1s;
			 animation-iteration-count: infinite;
}
	</style>
</head>
<body>
	<div class="loader">
		
	</div>
	<h4 class="animated zoomIn">We Are making it more awesome! Come Back After Sometime.<div data-load="index">GO to home</a></h4>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
	<script>
	$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});
		$('.loader').animateCss('pulse');
			$('div[data-load]').css('cursor','pointer');
				$('div[data-load]').click(function() {
					$load= this.getAttribute('data-load');
					window.location.href=$load;
				});
	
	</script>
</body>
</html>