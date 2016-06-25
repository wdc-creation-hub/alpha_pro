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
		<title>CESS - ChangePassword</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<!--Icons-->
		<script src="js/lumino.glyphs.js"></script>
		<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<style>
			.hid {
				display: none;
			}
			
			.alert {
				transition: all 2s ease-in-out !important;
			}
		</style>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script>
			tinymce.init({ 
				selector:'textarea', 
				height: 00,
				plugins: [
				  'advlist autolink link image lists charmap  preview hr anchor pagebreak spellchecker',
				  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				  'save table  directionality emoticons template paste textcolor image'
				],
				toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fullpage | forecolor backcolor emoticons'
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function (e) {
			                    $("#uploadForm").on('submit', (function (e) {
									$("#picupld").val("Uploading Pic....");
			                        e.preventDefault();
			                        $.ajax({
			                            url: "functions/upload.php"
			                            , type: "POST"
			                            , data: new FormData(this)
			                            , contentType: false
			                            , cache: false
			                            , processData: false
			                            , success: function (data) {
			                                $("#targetLayer").html(data);
											$("#picupld").val("Done");
			                            }
			                            , error: function () {}
			                        });
			                    }));
			                });
			
			                function setname() {
			                    var nameofpic = document.getElementById('picupname').value;
			                    var filtername = nameofpic.replace("C:\\fakepath\\", "");
			                    document.getElementById('picname').value = filtername;
			                }
			
			                window.setInterval(setname, 20);
		</script>
	</head>

	<body>
		<div class="modal fade" id="picup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Upload Image</h4>
						<hr>
					</div>
					<div class="modal-body">
						<form id="uploadForm" action="upload.php" method="post">
							<div id="targetLayer">No Image</div>
							<div id="uploadFormLayer">
								<br>
								<label>Upload Image File:</label>
								<br/>
								<input name="userImage" type="file" id="picupname" class="inputFile form-control" />
								<br>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<input type="submit" id="picupld" value="Submit" class="btn btn-info" />
						</form>
						</div>
						</div>


					</div>
				</div>
			</div>
		</div>
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
				<li>
					<a href="event">
						<svg class="glyph stroked table">
							<use xlink:href="#stroked-table"></use>
						</svg>Create Event</a>
				</li>
				<li>
					<a href="news">
						<svg class="glyph stroked app-window">
							<use xlink:href="#stroked-app-window"></use>
						</svg>Add News</a>
				</li>
				<li class="active">
					<a href="changepass.php">
						<svg class="glyph stroked lock">
							<use xlink:href="#stroked-lock" />
						</svg>Change Password</a>
				</li>
				<li>
					<a href="logout">
						<svg class="glyph stroked arrow left">
							<use xlink:href="#stroked-arrow-left"></use>
						</svg>LogOut</a>
				</li>
				<li>
					<a href="../">
						<svg class="glyph stroked-app-window">
							<use xlink:href="#stroked-app-window" />
						</svg>View Site</a>
				</li>
				<li>
					<a href="report">
						<svg class="glyph stroked cancel">
							<use xlink:href="#stroked-cancel" />
						</svg>Report Bug</a>
				</li>
			</ul>

		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li>
						<a href="index">
							<svg class="glyph stroked home">
								<use xlink:href="#stroked-home"></use>
							</svg>
						</a>
					</li>
					<li class="active">Change Password</li>
				</ol>
			</div>

			<div class="row">
				<div class="col-lg-6">

					<h1 class="page-header"><b>Create New Password:</b></h1>
					<div class="panel panel-default">
						<div id="kn" class="alert bg-info hid" role="alert">
							<span id="response"></span> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						</div>
						<div class="panel panel-body">
							<div class="col-md-12">
								<form id="chng">
									<input type="password" id='old' name="oldPass" class="form-control" placeholder="Old Password">
									<br>
									<input type="password" id='new' name="newpass" class="form-control" placeholder="New password">
									<br>
									<input type="submit" class="btn btn-info" id="passc" value="Change Password">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="js/bootstrap.min.js"></script>


			<script>
				$(document).ready(function() {
						$("#passc").click(function(e){
							$(this).text("Please Wait..");
						 	tinyMCE.triggerSave();
							var data=$('#chng').serialize();
							alert(data);
							$.post('functions/changepass.php',data,response);
							e.preventDefault();
						})
						
						function response(res) {
							$('#kn').removeClass('hid');
							$('#response').text(res);
							
							$("#create").text("Post");
							$("#event")[0].reset();
							$("#update").load('event #live');
						}
						$('.glyphicon-remove').click(function(){
							$('#kn').addClass('hid');	
						})
						
					})
			</script>
	</body>

	</html>