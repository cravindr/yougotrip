<?php
require("../dbconnect.php");

	$qry="SELECT * FROM  property_type_master";
    $rs=mysqli_query($con,$qry);
	   $data .= "<option value=''>Select Property</option>";
	  while($row=mysqli_fetch_array($rs)){
		  $des=$row['pro_type_des'];
		  $id = $row['pro_type_id'];
		  $data .= "<option value='$des'>$des</option>";
	  }
	  
	  echo $data;
?>