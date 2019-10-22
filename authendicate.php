<?php
session_start();

if($_SESSION['TRIP_USER_ID'] == ''){
	
	$_SESSION['CURRENT_PAHT']=curPageName();
	
	header("location:login.php");
	
	
}

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}


?>