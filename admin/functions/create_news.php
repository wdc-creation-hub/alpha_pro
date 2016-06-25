<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: index?err=$msg");

}
require_once('../db/connect.php');

	if (empty($_POST['title']) ||  empty($_POST['content'])) {
		echo "Please fill all the fields";	
		
	}

	else {
    $title = addslashes($_POST['title']);
 
    $content= nl2br(addslashes($_POST['content']));
	
  	$image =  addslashes($_POST['pname']);

 
    $query= "INSERT INTO `news` (`title`,`image`,`content`) VALUES ('$title','$image','$content')";

    $result=$db->query($query);
    if ($result===true) {
      echo "Post Was published Successfully";
    }

    else {
		echo "An Error Occured. Please Try Again";	
   }
}





?>
