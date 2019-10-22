<?php 
session_start();
require("../dbconnect.php");
	$qry="SELECT * FROM   theme_master ";
    $rs=mysqli_query($con,$qry);
	$array = array();
	  while($row=mysqli_fetch_assoc($rs)){
		  array_push($array,array('ID'=>$row['theme_id'],'Name'=>$row['theme_desc']));
	  }
		 echo json_encode($array);
?>

