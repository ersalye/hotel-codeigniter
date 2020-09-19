<?php
$to = "pulusuravikumar@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@storkks.com";

if(mail($to,$subject,$txt,$headers)){
	echo "Mail Sent";
}else{
	echo "mail Sent fail";
}
?>