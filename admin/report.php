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
<title>CESS - Report Bug</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>

<script src="js/lumino.glyphs.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
	.hid {
		display: none;
	}
	
</style>
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
			<li class="active"><a href="report"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>Report Bug</a></li>
		</ul>

	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li>Report Bug</li>
			</ol>
		</div>
			<div class="row">
				<div class="col-lg-12">
				
					<h1 class="page-header"><b>Report Bug:</b></h1>
						<div class="panel panel-default">
					
				<div class="panel panel-body">
					<div id="kn" class="alert bg-info hid" role="alert">
						<span id="response"></span> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
				<div  class="col-md-6">
					<form id="report">
						<br>
						<br>
						<label>Heading</label>
						<input name="title" class="form-control" type="text">
						<br>
						<label>Your Email</label>
						<input name="email" class="form-control" type="text">
						<br>
						<label>Details</label>
						<textarea id="content" name="content" class="form-control"> </textarea>
						<br>
						<div type="submit" class="btn btn-info pull-right" id="send">Send</div>
					</form>

				</div>
		</div>
					</div>
				</div>
		</div>
		


		<script src="js/bootstrap.min.js"></script>
	
			<script>
				$(document).ready(function() {
						$("#send").click(function(e){
							$(this).text("Posting..Please Wait");
							var data=$('#report').serialize();
							$.post('functions/mail_bug.php',data,response);
							e.preventDefault();
						})
						
						function response(res) {
							$('#kn').removeClass('hid');
							$('#response').text(res);
							$("#send").text("Post");
							$("#report")[0].reset();
						}
						$('.glyphicon-remove').click(function(){
							$('#kn').addClass('hid');	
						})
						
					})
			</script>
</body>

</html>
