<?php
session_start();
require("dbconnect.php");
$emailid=$_SESSION['TRIP_USER_EMAIL'];
$cpass=$_POST['cpass'];
$npass=$_POST['npass'];
$cnpass=$_POST['cnpass'];

$qry="select * from users where email='$emailid' and password=md5('$cpass')";
$rs=mysqli_query($con,$qry);
$count=mysqli_num_rows($rs);

if ($count>0)
{
$updqry="Update users set password=md5('$npass') where email='$emailid' ";
$rs=mysqli_query($con,$updqry);
$_SESSION['PASS_MSG']="Your Password changed successfully";

}
else
{
	$_SESSION['PASS_MSG']="Incorrect Current Password <br>Your Password Not changed  ";
}

header('Location: changepasswordmsg.php');

?>