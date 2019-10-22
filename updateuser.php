<?php
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID']))
	{	

	  if($_POST)
		  {
		  $user_id = $_SESSION['TRIP_USER_ID'];
		  $title = $_POST['title'];
		  $firstname = $_POST['firstname'];
		  $lastname = $_POST['lastname'];
		  $email = $_POST['email'];
		  $address = $_POST['address'];
		  $place = $_POST['place'];
		  $state = $_POST['state'];
		  $country = $_POST['country'];
		  $pincode = $_POST['pincode'];
		  $pan = $_POST['pan'];
		  $phone = $_POST['phone'];
		  $mobile = $_POST['mobile'];
		  $mobile2 = $_POST['mobile2'];
		  
		  
		  $credit = $_POST['credit'];
		  $debit = $_POST['debit'];
		  $comments = $_POST['comments'];		

	

		  $mdate = Date('Y-m-d H:i:s');
		  
		  $qry= "update users set `title`='$title', `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `address`='$address',
		   `place`='$place', `state`='$state', `country`='$country', `pincode`='$pincode',`phone`='$phone', `mobile`='$mobile', `mobile2`='$mobile2',
			`mdate`='$mdate',
			`pan`='$pan'
			 where user_id='$user_id'";
		  
		  $res = mysqli_query($con,$qry);
		  Header("Location:userinfo.php");
		}
	}
else
{
Header("Location:index.php");
}



?>