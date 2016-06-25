<?php 
if (empty($_POST['title']) || empty($_POST['email']) || empty($_POST['content'])) {
		echo "Please fill all the fields";	
}
else {
	
    if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['content'];
    $to = "mail2paras.s@gmail.com";
    $subject = "CESS Bug Report";
    $from = $email;
    $headers = $name;
    if(mail($to,$subject,$message,$headers)) {
       
       
           echo "Your message has been delivered. Thank You.";
		
	}
       
        else {
			echo "Message Sending Failed";
		}      
	}
}

    


?>