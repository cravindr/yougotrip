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
$mdate = Date('Y-m-d');
$desc=$_POST['desc'];


$qry="UPDATE `crm` SET 
`title` = '$title',
`first_name` = '$fname',
`last_name` = '$lname',
`company` = '$company', 
`passportno` = '$passportno', 
`issue_date` = '$idate', 
`exp_date` = '$edate',
`lead_source` = '$lsource', 
`industries` = '$industries', 
`address` = '$addresss',
`city` = '$city',
`zip` = '$zip',
`state` = '$state',
`country` = '$country',
`income` = '$income',
`phone` = '$phone', 
`mobile` = '$mobile', 
`mobile2` = '$mobile2',
`fax` = '$fax', 
`email` = '$email',
`website` = '$website',
`ncdate` = '$ncdate',
`mdate` = '$mdate',
`desc` = '$desc' 
WHERE `crm`.`crm_id` =".$_SESSION['ID_EDIT'] ;

unset($_SESSION['ID_EDIT']);




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