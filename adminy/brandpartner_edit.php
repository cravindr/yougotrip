<?php
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');

$id=$_POST['partid'];

$company=$_POST['company'];
$url=$_POST['url'];
$desc=$_POST['desc'];
$metacontent=$_POST['meta_content'];
$metakeyword=$_POST['meta_keyword'];
$image_ret1 = imageUpload('logoimage',1);
$cdate = Date('Y-m-d H:i:s');


if($image_ret1 )
{
$qry="UPDATE `brandpartner` SET `companyname` = '$company',
`image` = '$image_ret1',
`url` = '$url',
`desc` = '$desc',
`meta_desc` = '$metacontent',
`meta_keyword` = '$metakeyword' WHERE `brandpartner`.`id` =".$id;
}

else
{
$qry="UPDATE `brandpartner` SET `companyname` = '$company',
`url` = '$url',
`desc` = '$desc',
`meta_desc` = '$metacontent',
`meta_keyword` = '$metakeyword' WHERE `brandpartner`.`id` =".$id;
	
}
$res=mysqli_query($con,$qry);

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Brand Partner Addeded Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "brandlist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Brand Partner Addeded Successfully.</h3>";
	$_SESSION['REDIRECT_URL'] = "brandlist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>