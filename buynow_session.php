<?php
session_start(); 
require('smartysetting.php');

if($_POST){	
	$_SESSION['TOUR_PACK_BUY_ID'] = $_POST['tour_pack_id'];
	$_SESSION['LOGIN_REDIRECT_URL'] = 'buynow.php';
	header('Location:buynow.php');
}else{
	header('Location:index.php');
}
	


?>
