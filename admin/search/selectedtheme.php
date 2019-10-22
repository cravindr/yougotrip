<?php 
session_start();
require("../dbconnect.php");
	$pack_id = $_SESSION['PACK_ID'];
	$qry="SELECT * FROM   package where pack_id='$pack_id' ";
    $rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($rs);
	echo $row['theme'].",";	 // we must add additional comma for splitiong value in Javascript
	unset( $_SESSION['PACK_ID']);	  
?>

