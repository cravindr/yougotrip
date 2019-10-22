<?php
session_start();
require('dbconnect.php');
 
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query= "SELECT * from agent where email='$username' and password=md5('$password') and active=1 ";
 


 
 $rs=mysqli_query($con, $query);
 $row=mysqli_fetch_array($rs);
  $find=mysqli_num_rows($rs);
  
  if($find==1)
  {
	$_SESSION['AGENT_ID']=$row["agent_id"];
	$_SESSION['AGENT_NAME']=$row["company"];
	$_SESSION['AGENT_LOGO']=$row["company_logo"];
	
	header("location:dashboard.php");

  }
else
{
	$_SESSION['LOGINERROR']="User Name or Password Incorrect..";
	header("location:index.php");
	
}

 
?>