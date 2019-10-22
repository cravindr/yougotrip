<?php
require("../dbconnect.php");
require('../formaturl.php');
/* RECEIVE VALUE */
$validateValue=$_REQUEST['fieldValue'];
$validateId=$_REQUEST['fieldId'];

$validateValue=formatUrl($validateValue);

$validateError= "This URL is already taken";
$validateSuccess= "This URL is available";

$query= "SELECT * from package where staticurl='$validateValue' ";
 $rs=mysqli_query($con, $query);
$validateValue=mysqli_num_rows($rs);



	/* RETURN VALUE */
	$arrayToJs = array();
	$arrayToJs[0] = $validateId;
	

if($validateValue ==0){		// validate??
	$arrayToJs[1] = true;			// RETURN TRUE
	echo json_encode($arrayToJs);			// RETURN ARRAY WITH success
}else{
	for($x=0;$x<1000000;$x++){
		if($x == 990000){
			$arrayToJs[1] = false;
			echo json_encode($arrayToJs);		// RETURN ARRAY WITH ERROR
		}
	}
	
}

?>