<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db_name= "cess_base";
    $db= @new mysqli($host,$user,$pass,$db_name);
    
    if ($db->connect_error) {
     exit("<center>Cannot connect to database. <br> Please Import Data Base First.link<center>");   
    }


?>
