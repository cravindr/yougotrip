<?php
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');
$leadowner=$_SESSION['ADMIN_ID'];
$company=$_POST['company'];
$url=$_POST['url'];
$desc=$_POST['desc'];
$metacontent=$_POST['meta_content'];
$metakeyword=$_POST['meta_keyword'];
$image_ret1 = imageUpload('logoimage',1);
$cdate = Date('Y-m-d H:i:s');

$qry="INSERT INTO `brandpartner` (`companyname` ,`image` ,`desc` ,`url` ,`meta_desc` ,`meta_keyword` ,`cdate` ,`active`)
VALUES ( '$company', '$image_ret1', '$desc', '$url', '$metacontent', '$metakeyword', '$cdate', '1')";

$res=mysqli_query($con,$qry);

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Brand Partner Addeded Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "brandpartner.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Brand Partner Addeded Successfully.</h3>";
	$_SESSION['REDIRECT_URL'] = "brandpartner.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>