<?php 
session_start();
require("../dbconnect.php");
$agent_id=$_SESSION['AGENT_ID'];

if (isset($_POST['query']))
{
	
	$querystring=$_POST['query'];
	$qry="SELECT * FROM   customer WHERE  agent_id='$agent_id' and  first_name LIKE'%".$querystring."%' order by first_name";

    $rs=mysqli_query($con,$qry);
	
	$array = array();
	
	  while($row=mysqli_fetch_assoc($rs)){

		 // array_push($array,array('pname'=>$row['pack_title'],'aprice'=>$row['adult_price'],'cwbprice'=>$row['child_wob_price'],'cprice'=>$row['child_price']));
		 $fullname=$row['first_name']."<br>".$row['last_name']."<br><b>".$row['company']."<b>" ;
		  array_push($array,array('fname'=>$row['first_name'],'id'=>$row['customer_id'],'lname'=>$row['last_name'],'company'=>$row['company'],'fullname'=>$fullname));
		 
	  }
		 echo json_encode($array);

}

?>


