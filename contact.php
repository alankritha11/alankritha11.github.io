<?php

$message=$_POST['message'];
$to = "axy6806@g.rit.edu";
$subject = "New Message";

mail($to, $subject, $message,"From:" . $name);
header('location:contact-us-thank.php')

?>
