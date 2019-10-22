<?php
session_start(); 
require('smartysetting.php');

if($_POST){
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$redirecturl=$_POST['redirecturl'];
}

$qry= "select * from users where email='$username' and password=md5('$password') and status='1' ";
$res = mysqli_query($con,$qry);


if(mysqli_num_rows($res))
	{
		$row = mysqli_fetch_array($res);
		
		
		if($row['verified']=='1')
			{
			
			$_SESSION['TRIP_USER_ID'] = $row['user_id'];
			$_SESSION['TRIP_USER_NAME'] = $row['firstname']. " ".$row['lastname'] ;
			$_SESSION['TRIP_USER_EMAIL'] = $row['email'];
			
			if ($_SESSION['CURRENT_PAHT'])
			{
				
				$path=$_SESSION['CURRENT_PAHT'];
				unset($_SESSION['CURRENT_PAHT']);
			header("Location:$path");
			}
			elseif($redirecturl!=='')
			{
				
				header("Location:$redirecturl");
			}
			else
			{
				echo 're-url blanck';
				exit;
				header("Location:$userinfo.php");
			}
		}
		else
		{
			header("Location:manualactivation.php");
		}
	}
else
	{
		
			
		$_SESSION['loginerror'] = 1;
		header('Location:login.php');
	}

?>
