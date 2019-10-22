<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');
$admin_id=$_SESSION['ADMIN_ID'];

if($_POST){
	
	$agent_id = $_POST['agent_id'];
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	
	
	/*$countrylist="";
		//$theme = $_POST['theme'];
		

	
		foreach ($country as $countryvalue){
   		 if ($countrylist=="")
			{
	       $countrylist=$countrylist.$countryvalue;
			}
		   else
		   {
		   $countrylist=$themelist. ",".$countryvalue;
		   }
		}
	
	$country=$countrylist;*/
	
	
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
	
	$credit= $_POST['credit'];	
	$debit= $_POST['debit'];
	$comments= $_POST['comments'];
	
	$pass = $_POST['pass'];
	
	
	
	$image_ret1 = imageUpload('pro_image1',1);	
}

$date = Date('Y-m-d');
$qry= "update agent set `title`='$title', `first_name`='$firstname', `last_name`='$lastname', `reference`='', `industries`='',
   `address`='$address', `city`='$city', `zip`='$pincode',   `state`='$state', `country`='$country', `income`='$income',
   `phone`='$phone', `mobile`='$mobile', `mobile2`='$mobile2', `fax`='$fax', `email`='$email', `password`=md5('$pass'), `pan_card_no`='$pan', `website`='$website',
   `company`='$cmp_name',   `company_logo`='$image_ret1', `company_reg_no`='$cmp_reg_no', `company_vat_no`='$cmp_vat_no',
   `company_service_tax_no`='$cmp_service_tax', `company_address`='$cmp_address', `company_bank_details`='$cmp_bank_details',
   `company_pan_card_no`='$cmp_pan_no',`mdate`='$date' where agent_id='$agent_id'";

  if($image_ret1 == '0' || $image_ret1 == ''){
   $qry = str_replace("`company_logo`='$image_ret1',",'',$qry);
  }
  
  if ( trim($pass)==''){
	   $qry = str_replace("`password`=md5('$pass'),",'',$qry);
  }
 $res = mysqli_query($con,$qry);
 $cdate=date('Y-m-d');

if($credit>0)
{
	$qrytrans="select sum(credit)-sum(debit) as 'tbalance' from agent_payment where agent_id='$agent_id'";
	$rstrans=mysqli_query($con,$qrytrans);
	$rowtrans=mysqli_fetch_array($rstrans);
	
	$balance=$rowtrans['tbalance'];
	$tbalance=$balance+$credit;
	
	$qryinspay="insert into agent_payment(agent_id,credit,balance,cdate,comments,admin_id) values
	('$agent_id','$credit','$tbalance','$cdate','$comments','$admin_id')";
	mysqli_query($con,$qryinspay);
										 

}

if($debit>0)
{
	$qrytrans="select sum(credit)-sum(debit) as 'tbalance' from agent_payment where agent_id='$agent_id'";
	$rstrans=mysqli_query($con,$qrytrans);
	$rowtrans=mysqli_fetch_array($rstrans);
	
	$balance=$rowtrans['tbalance'];
	$tbalance=$balance-$debit;
	
	$qryinspay="insert into agent_payment(agent_id,debit,balance,cdate,comments,admin_id) values
	('$agent_id','$debit','$tbalance','$cdate','$comments','$admin_id')";
	mysqli_query($con,$qryinspay);
										 

}





if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Agent Details updated Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "agentslist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_agent";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Agent Details not updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "agent.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_agent";
	header('Location:result.php');
}

?>
