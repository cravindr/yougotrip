<?php 
require("../dbconnect.php");

if (isset($_POST['query']))
{
	
	$querystring=$_POST['query'];
	$qry="SELECT * FROM  sales_type_master";

    $rs=mysqli_query($con,$qry);
	
	  while($row=mysqli_fetch_array($rs)){
		  $array[]=$row['sales_type_des'];
	  }
		  echo json_encode($array);
}

?>