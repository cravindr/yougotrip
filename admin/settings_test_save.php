<?php
session_start();
require('smartysetting.php');


if($_POST){
	
	$name = $_POST['name'];
	$address = $_POST['address'];
	$place = $_POST['place'];
}


$qry= "insert into setting_test (`name`, `address`, `place`)
 	   values('$name','$address','$place')";

$res = mysqli_query($con,$qry);

/*if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Settings added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Settings not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}*/

?>
