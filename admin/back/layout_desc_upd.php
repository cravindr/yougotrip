<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
if($_POST){
	
	$businesshour=$_POST['businesshour'];
	$stayconnected=$_POST['stayconnected'];
	$visaprocessing=$_POST['visaprocessing'];
	$ticketbooking=$_POST['ticketbooking'];
	$whyweare=$_POST['whyweare'];
	
}



$qry_ins="INSERT INTO `layout_desc` (
`business_hours` ,
`stayconnected` ,
`visa_process` ,
`ticket_booking` ,
`why_we_are`
)
VALUES (
'$businesshour', '$stayconnected', '$visaprocessing', '$ticketbooking', '$whyweare'
);";


$qry_upd="UPDATE `layout_desc` SET 
`business_hours` = '$businesshour',
`stayconnected` = '$stayconnected',
`visa_process` = '$visaprocessing',
`ticket_booking` = '$ticketbooking',
`why_we_are` = '$whyweare'";





$res = mysqli_query($con,$qry_upd);

if($res)

{
	
}
else
{
	$res = mysqli_query($con,$qry_ins);
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Congratulations <br> Details Updated successfully</h4>";
	$_SESSION['REDIRECT_URL'] = "layout_desc.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Details Not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "layout_desc.php";
	header('Location:result.php');
}

?>
