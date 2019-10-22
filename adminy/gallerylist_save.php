<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');
//$adminid = $_SESSION['ADMIN_ID'];

if($_POST){	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$meta_desc = $_POST['meta_desc'];
	$meta_keyword = $_POST['meta_keyword'];		
	$piccount = $_POST['noofimgbox'];
}

$cdate = Date('Y-m-d H:i:s');

$qry= "insert into gallery(`name`, `desc`, `meta_desc`, `meta_keyword`) values('$title','$description','$meta_desc','$meta_keyword')";

$res = mysqli_query($con,$qry);
$id = mysqli_insert_id($con);  


$qry1="";

for($i=2;$i<=$piccount;$i++){
	$image_ret = imageUpload("pro_image$i",$i); 
	if($image_ret!==0)
	{
			if ($qry1=="")
				$qry1= $qry1. " ('$id', '$image_ret', '$cdate')";
			else
					$qry1= $qry1. ",('$id', '$image_ret', '$cdate')";
	}
}
echo $qry2=" INSERT INTO `gallery_image` (`gallery_id`, `gallery_image`, `cdate`) VALUES" . $qry1;
exit;

if($qry1!=""){
$res = mysqli_query($con,$qry2);
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Gallery added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "gallerylist.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Gallery not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "gallerylist.php";
	header('Location:result.php');
}

?>
