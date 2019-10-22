<?php
session_start();
require('dbconnect.php');
 
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query= "SELECT * from admin_profile where user_name='$username' and password=md5('$password') and active=1 ";
/* 
echo $query;
 exit;
*/
 
 $rs=mysqli_query($con, $query);
 $row=mysqli_fetch_array($rs);
  $find=mysqli_num_rows($rs);
  
  if($find==1)
  {
	$_SESSION['ADMIN_ID']=$row["uid"];
	$_SESSION['ADMIN_name']=$row["user_name"];
	header("location:dashboard.php");

  }
else
{
	$_SESSION['LOGINERROR']="User Name or Password Incorrect..";
	header("location:index.php");
	
}

 
?>