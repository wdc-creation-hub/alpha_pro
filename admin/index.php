<?php
require_once('db/connect.php');
$msg="";
session_start();
if ((isset($_SESSION['login']))) {
header ("Location: panel");
}

if (isset($_GET['err'])) {
	$msg=$_GET['err']; 
}





if(isset($_POST['auth'])) {
    if(empty($_POST['user']) || empty($_POST['pass'])) {
     $msg="Please fill all the fields";
    }
    
    else {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $epass= md5($pass);
        $query="SELECT * FROM user WHERE  username='$user' AND password='$epass'";
        
        $gain=$db->query($query);
        
        if ($gain) {
           if ($gain->num_rows > 0) {

            session_start();
            $_SESSION['login'] = "on";
            $_SESSION['user']=$user;
            header('location:panel');

            }
            else {
            session_start();
            $_SESSION['login'] = "off";
            $msg= "Invalid Username or Password";
           
            } 
        }

            else {
             $msg="Login Failed";
            
            }
        
    }
}










$db->close();
 
?>

<?php
include 'includes/meta.php';?>
	<title>
		Login | Administration
	</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		body {
			background: #ce3030;
		}
</style>

</head>
<body>
<!-- #header  -->
	<header>
		<h3>Admin Login</h3>
	</header>

	<!-- login box -->
	<div class="login-form">

		<form action="" method="post">
			<span id="logo">
              <img src="img/logo/logo-2.png" height="130px">
			</span>
			<input id="ID" type="text" name="user" required placeholder="Username">
			<input id="Pass" name="pass" type="password" required placeholder="Password">
			<input type="submit" name="auth" value="Login">
			<br><br><center><?php echo $msg; ?></center>
			
		</form>
	</div>

</body>

</html>