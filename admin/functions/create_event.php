<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: index?err=$msg");

}
require_once('../db/connect.php');

	if (empty($_POST['title']) || empty($_POST['team']) || empty($_POST['start']) || empty($_POST['end']) ||  empty($_POST['content'])) {
		echo "Please fill all the fields";	
		
	}

	else {
    $title = addslashes($_POST['title']);
 	$team = addslashes($_POST['team']);
    $content= nl2br(addslashes($_POST['content']));
	$start = addslashes($_POST['start']);
    $end= addslashes($_POST['end']);
  	$image =  addslashes($_POST['pname']);

 
    $query= "INSERT INTO `event` (`title`,`startd`, `endd`,`image`,`details`,`team`) VALUES ('$title','$start','$end','$image','$content','$team')";

    $result=$db->query($query);
    if ($result===true) {
      echo "Post Was published Successfully";
    }

    else {
		echo "An Error Occured. Please Try Again";	
   }
}





?>
