<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$company=$_POST['company'];
$passportno=$_POST['passportno'];
$idate=$_POST['idate'];
$edate=$_POST['edate'];
$lsource=$_POST['lsource'];
$industries=$_POST['industries'];
$addresss=$_POST['addresss'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$country=$_POST['country'];
$income=$_POST['income'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$mobile2=$_POST['mobile2'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$website=$_POST['website'];
$ncdate=$_POST['ncdate'];
$leadowner=$_SESSION['ADMIN_ID'];
$cdate = Date('Y-m-d');
$mdate = Date('Y-m-d');
$desc=$_POST['desc'];

$qry="INSERT INTO `crm` (
`lead_owner` ,
`title` ,
`first_name` ,
`last_name` ,
`company` ,
`passportno` ,
`issue_date` ,
`exp_date` ,
`lead_source` ,
`industries` ,
`address` ,
`city` ,
`zip` ,
`state` ,
`country` ,
`income` ,
`phone` ,
`mobile` ,
`mobile2` ,
`fax` ,
`email` ,
`website` ,
`ncdate` ,
`cdate` ,
`mdate` ,
`desc`
)
VALUES (
 '$leadowner', '$title', '$fname', '$lname', '$company', '$passportno', '$idate', '$edate', '$lsource', '$industries', '$addresss', '$city', '$zip', '$state', '$country', '$income', '$phone', '$mobile', '$mobile2', '$fax', '$email', '$website', '$ncdate', '$cdate', '$mdate', '$desc')";
$res=mysqli_query($con,$qry);

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Customer added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "crm.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_crm";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Customer not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "crm";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_crm";
	header('Location:result.php');
}


?>