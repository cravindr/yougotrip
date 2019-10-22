<?php 
session_start();
require("../dbconnect.php");
	$pack_id = $_SESSION['COUNTRY_NAME'];
	unset( $_SESSION['COUNTRY_NAME']);
	
	echo $pack_id.",";
	
	/*$qry="SELECT * FROM   country where NAME='$pack_id' ";
	echo $qry;
    $rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($rs);
	echo $row['NAME'].",";	 // we must add additional comma for splitiong value in Javascript
	*/
	
		  
?>

