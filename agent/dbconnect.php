<?php

/*$db_host="localhost";
	$db_username="root";
	$db_pass="";
	$db_name="yougotrip";
	
$con= mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql"); 

mysqli_select_db($con,$db_name) or die ("no database"); */


$host="localhost";
$user="root";
$pass="";
$db="yougotrip";

$con = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_error) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

return $con;

?>