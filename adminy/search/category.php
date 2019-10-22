<?php
require("../dbconnect.php");

if (isset($_POST['cat_id']))
{
	
	$querystring=$_POST['cat_id'];
	$qry="SELECT * FROM  subcategory WHERE cat_id =".$querystring;

    $rs=mysqli_query($con,$qry);
	   
	  while($row=mysqli_fetch_array($rs)){
		  $des=$row['sub_cat_des'];
		  $id = $row['sub_cat_id'];
		  $data .= "<option value='$id'>$des</option>";
	  }
	  
	  echo $data;
}

?>