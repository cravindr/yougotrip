<?php 
session_start();
require("../dbconnect.php");

if (isset($_POST['query']))
{
	
	$querystring=$_POST['query'];
	$qry="SELECT * FROM   package WHERE  pack_title  LIKE'%".$querystring."%' order by pack_title";

    $rs=mysqli_query($con,$qry);
	
	$array = array();
	
	  while($row=mysqli_fetch_assoc($rs)){

		  array_push($array,array('pname'=>$row['pack_title'],'aprice'=>$row['adult_price'],'cwbprice'=>$row['child_wob_price'],'cprice'=>$row['child_price']));
	  }
		 echo json_encode($array);

}

?>

