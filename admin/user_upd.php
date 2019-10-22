<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$adminid = $_SESSION['ADMIN_ID'];
if($_POST){
	$user_id = $_POST['user_id'];
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$place = $_POST['place'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$pincode = $_POST['pincode'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$mobile2 = $_POST['mobile2'];
	
	$credit = $_POST['credit'];
	$debit = $_POST['debit'];
	$comments = $_POST['comments'];		
}

$mdate = Date('Y-m-d H:i:s');

$qry= "update users set `title`='$title', `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `address`='$address',
 `place`='$place', `state`='$state', `country`='$country', `pincode`='$pincode',`phone`='$phone', `mobile`='$mobile', `mobile2`='$mobile2',
  `mdate`='$mdate' where user_id='$user_id'";

$res = mysqli_query($con,$qry);

if($credit != ''){
	$qry = "select balance from payment where user_id = '$user_id' order by payment_id desc limit 1";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$amt = $row['balance'];
	$balance = $amt + $credit;
	$qry= "insert into payment(`user_id`, `credit`, `balance`, `cdate`, `admin_id`,`comments`) values('$user_id','$credit','$balance','$mdate','$adminid','$comments')";
	$res = mysqli_query($con,$qry);
}

if($debit != ''){
	$qry = "select balance from payment where user_id = '$user_id' order by payment_id desc limit 1";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$amt = $row['balance'];
	$balance = $amt - $debit;
	$qry= "insert into payment(`user_id`, `debit`, `balance`, `cdate`, `admin_id`,`comments`) values('$user_id','$debit','$balance','$mdate','$adminid','$comments')";
	$res = mysqli_query($con,$qry);	
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>User Details updated Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "manageusers.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_user.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry User Details not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "manageusers.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_user.php";
	header('Location:result.php');
}

?>
