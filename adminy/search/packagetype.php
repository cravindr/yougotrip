<?php 
require("../dbconnect.php");

if (isset($_POST['query']))
{
	
	$querystring=$_POST['query'];
	$qry="SELECT * FROM  category WHERE  category_desc  LIKE'%".$querystring."%'";

    $rs=mysqli_query($con,$qry);
	
	  while($row=mysqli_fetch_array($rs)){
		  $array[]=$row['category_desc'];
	  }
		  echo json_encode($array);

}

?>