<?php
    
	$host="localhost";
    $user="root";
    $pass="";
    $db_name= "cess_base";
    $db= @new mysqli($host,$user,$pass,$db_name);
    
    if ($db->connect_error) {
     exit("<center style='font-size:20px'>Cannot connect to database.<center>");   
    }
?>
