<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
if($_POST){
	
	$homecont=$_POST['homecont'];
	$aboutus=$_POST['aboutus'];
	$services=$_POST['services'];
	$contactus=$_POST['contactus'];
	$termsandcondition=$_POST['termsandcondition'];
	$returnpol=$_POST['returnpol'];
	$invoice_message=$_POST['invoice_message'];
	$welcome=$_POST['welcome'];
	$forgetpass=$_POST['forgetpass'];
	$activationmessage=$_POST['activationmessage'];
	
}

$qry_ins="INSERT INTO `content_detail` (`home_link` ,`about_us` ,`services` ,`contact` ,`terms_conditions` ,`return_policy` ,
`invoice_text` ,`welcome_message` ,`forgot_password` ,`activation`)VALUES 
('$homecont', '$aboutus', '$services', '$contactus', '$termsandcondition', '$returnpol', '$invoice_message', '$welcome', '$forgetpass', '$activationmessage')";


$qry_upd="UPDATE `content_detail` SET 
`home_link` = '$homecont',
`about_us` = '$aboutus',
`services` = '$services',
`contact` = '$contactus',
`terms_conditions` = '$termsandcondition',
`return_policy` = '$returnpol',
`invoice_text` = '$invoice_message',
`welcome_message` = '$welcome',
`forgot_password` = '$forgetpass',
`activation` = '$activationmessage'";


$rsno = mysqli_query($con,"select * from content_detail");
$rono = mysqli_num_rows($rsno);

 
if($rono == 0)
{	
	 $res = mysqli_query($con,$qry_ins);
}
else
{	
	 $res = mysqli_query($con,$qry_upd);
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Congratulations <br> Details Updated successfully</h4>";
	$_SESSION['REDIRECT_URL'] = "content.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Details Not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "content.php";
	header('Location:result.php');
}

?>
