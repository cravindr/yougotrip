

<?php
require("../dbconnect.php");

if (isset($_POST['query']))
{
	
	$querystring=$_POST['query'];
	$qry="SELECT * FROM  countries WHERE country_name LIKE'%".$querystring."%'";
    $rs=mysqli_query($con,$qry);
	
	  while($row=mysqli_fetch_array($rs)){
		  $array[]=$row['country_name'];
	  }
		  echo json_encode($array);

}

/*if (isset($_POST['query']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("b2b");
	$querystring=$_POST['query'];
	//$querystring="au";
	$query="SELECT * FROM  countries WHERE country_name LIKE'%".$querystring."%'";
	//echo $query;
	$sql=mysql_query($query);
	$array=array();
	while($row=mysql_fetch_assoc($sql))
	{
	$array[]=$row['country_name'] ."<p><strong>".$row['country_code']."</strong></p>" ;

	}
		echo json_encode($array);
}*/
?>