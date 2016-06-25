<?php
session_start();
if (isset($_SESSION['login'])) {
$msg="You Need To Login First";
header ("Location: panel");

}
require_once('db/connect.php');
$msg="";
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

           
            $_SESSION['login'] = "on";
            header('location:panel');

            }
            else {
           
          
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

	<header>
		<h3>Admin Login</h3>
	</header>

	<!-- login box -->
	<div class="login-form">

		<form action="" method="post">
			<span id="logo">
              <img src="img/logo/logo-2.png" height="130px">
			</span>
			<input id="ID" type="text" name="user" required placeholder="Username" autocomplete="off">
			<input id="Pass" name="pass" type="password" required placeholder="Password" autocomplete="off">
			<input type="submit" name="auth" value="Login">
			<br><br><center><?php echo $msg; ?></center>
			
		</form>
	</div>

</body>

</html>