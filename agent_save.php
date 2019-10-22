<?php
session_start();
require('smartysetting.php');
require('image_upload.php');
require('dbconnect.php');
if($_POST){
	
	$title = $_POST['title'];
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$pincode = $_POST['pincode'];
	$email = $_POST['email'];
	$income = $_POST['income'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$mobile2 = $_POST['mobile2'];
	$fax = $_POST['fax'];
	$pan = $_POST['pan'];
	$website = $_POST['website'];
	
	$cmp_name = $_POST['cmp_name'];
	$cmp_reg_no = $_POST['cmp_reg_no'];
	$cmp_vat_no = $_POST['cmp_vat_no'];
	$cmp_service_tax = $_POST['cmp_service_tax'];
	$cmp_address = $_POST['cmp_address'];
	$cmp_bank_details = $_POST['cmp_bank_details'];
	$cmp_pan_no = $_POST['cmp_pan_no'];	
	$pass = $_POST['pass'];		
	
	$image_ret1 = "../". imageUpload('pro_image1',1);	
}

$date = Date('Y-m-d');
$qry= "insert into agent(`title`, `first_name`, `last_name`, `reference`, `industries`, `address`, `city`, `zip`,
   `state`, `country`, `income`, `phone`, `mobile`, `mobile2`, `fax`, `email`,`password`, `pan_card_no`, `website`, `company`,
   `company_logo`, `company_reg_no`, `company_vat_no`, `company_service_tax_no`, `company_address`, `company_bank_details`,
   `company_pan_card_no`,`cdate`,`active`) 
	values('$title','$firstname','$lastname','','','$address','$city','$pincode',
	'$state','$country','$income','$phone','$mobile','$mobile2','$fax','$email',md5('$pass'),'$pan','$website','$cmp_name',
	'$image_ret1','$cmp_reg_no','$cmp_vat_no','$cmp_service_tax','$cmp_address','$cmp_bank_details',
	'$cmp_pan_no','$date','0')";

$res = mysqli_query($con,$qry);

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Agent Details added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "agentslist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_agent";
	header('Location:agent/index.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Agent Details not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "agent.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_agent";
	header('Location:agent/index.php');
}

?>
