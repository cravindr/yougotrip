<?php
require("../dbconnect.php");

	$qry="SELECT * FROM  condition_master";
    $rs=mysqli_query($con,$qry);
	   $data .= "<option value=''>Select condition</option>";
	  while($row=mysqli_fetch_array($rs)){
		  $des=$row['condition_des'];
		  $data .= "<option value='$des'>$des</option>";
	  }
	  
	  echo $data;
?>