<?php 
session_start();
require("../dbconnect.php");
	$qry="SELECT * FROM   category ";
    $rs=mysqli_query($con,$qry);
	$array = array();
	  while($row=mysqli_fetch_assoc($rs)){
		  array_push($array,array('ID'=>$row['category_id'],'Name'=>$row['category_desc']));
	  }
		 echo json_encode($array);
?>

