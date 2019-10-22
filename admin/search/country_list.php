<?php 
session_start();
require("../dbconnect.php");
	$qry="SELECT * FROM   country ";
    $rs=mysqli_query($con,$qry);
	$array = array();
	//array_push($array,array('ID'=>null,'Name'=>"Please Select Country"));
	  while($row=mysqli_fetch_assoc($rs)){
		  array_push($array,array('ID'=>$row['country_id'],'Name'=>$row['name']));
	  }
		 echo json_encode($array);
?>

