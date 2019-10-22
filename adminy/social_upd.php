<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
if($_POST){
	
	$callus=$_POST['callus'];
	$feed=$_POST['feed'];
	$facebook=$_POST['facebook'];
	$twitter=$_POST['twitter'];
	$googleplus=$_POST['googleplus'];
	$pinterest=$_POST['pinterest'];
	$linkedin=$_POST['linkedin'];
	$vimeo=$_POST['vimeo'];
	$youtube=$_POST['youtube'];

	
}

$qry_ins="INSERT INTO `social` (`callus` ,`feed` ,`facebook` ,`twitter` ,`googleplus` ,`pinterest` ,`linkedin` ,`vimeo` ,`youtube`)
VALUES ('$callus', '$feed', '$facebook', '$twitter', '$googleplus', '$pinterest', '$linkedin', '$vimeo', '$youtube')";

$qry_upd="UPDATE `yougotrip`.`social` SET 
`callus` = '$callus',
`feed` = '$feed',
`facebook` = '$facebook',
`twitter` = '$twitter',
`googleplus` = '$googleplus',
`pinterest` = '$pinterest',
`linkedin` = '$linkedin',
`vimeo` = '$vimeo',
`youtube` = '$youtube' ";


$res = mysqli_query($con,$qry_upd);

if($res)
{
}
else
{
	$res = mysqli_query($con,$qry_ins);
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Congratulations <br> Details Updated successfully</h4>";
	$_SESSION['REDIRECT_URL'] = "social.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Details Not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "social.php";
	header('Location:result.php');
}

?>
