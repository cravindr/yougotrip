<?php
session_start();
require('smartysetting.php');
require('source/email.php');

if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	fnMail($email, $subject, $message);
	header('Location:index.php');
}else{
	header('Location:index.php');
}


?>