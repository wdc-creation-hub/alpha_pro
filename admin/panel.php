<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: index?err=$msg");

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CESS - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand text-center" href="index.php"><span>CESS</span> Room</a>
				
					
						
	
			</div>
							
		</div>
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<br>
		<br>
		<ul class="nav menu">
			<li><a href="event"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Create Event</a></li>
			<li><a href="news"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Add News</a></li>
			<li><a href="changepass.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"/></svg>Change Password</a></li>
			<li><a href="logout"><svg class="glyph stroked arrow left"><use xlink:href="#stroked-arrow-left"></use></svg>LogOut</a></li>
			<li><a href="../"><svg class="glyph stroked-app-window"><use xlink:href="#stroked-app-window"/></svg>View Site</a></li>
			<li><a href="report"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>Report Bug</a></li>
		</ul>

	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header text-center">Welcome</h1>
			</div>
			<p class="text-center">This page is under construction. You can access other features till that time</p>
		</div>
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
