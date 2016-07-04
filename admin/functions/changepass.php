<?php
require_once('../db/connect.php');
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}
else {
$msg="You Need To Login First";
}

$user = $_SESSION['user'];
$query="SELECT password FROM user WHERE username = '$user'";
$result = $db->query($query);
$getpass=$result->fetch_array();
$dataPass= $getpass['password'];
$newPass=$_POST['newpass'];
$enterPass= $_POST['oldPass'];
$encrypPass= md5($_POST['oldPass']);
if($encrypPass===$dataPass && !empty($newPass)) {
$encrypnew = md5($newPass);
$upquery= "UPDATE user SET password='$encrypnew' WHERE  username ='$user' AND password='$dataPass'";
$set = $db->query($upquery);
if($set){
    echo 'Password Successfully Changed';
}
}

else {
echo 'Invalid Password';
}




?>