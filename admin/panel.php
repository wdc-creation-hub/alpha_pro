<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: index?err=$msg");

}
?>
<a href ="logout.php">Logout</a>

<h3>User Construction</h3>