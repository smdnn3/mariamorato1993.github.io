<?php
if(isset($_POST['submit'])){
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$message= $_POST['message'];

	$emailto= "heartbreak-h@hotmail.com";
	$header= "From: ".$email ;


	mail($emailto, $header);
	header("Location: index.html?mailsent");
}
?>