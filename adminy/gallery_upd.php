<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');
//$adminid = $_SESSION['ADMIN_ID'];

if($_POST){	
	$gallery_id = $_POST['gallery_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$meta_desc = $_POST['meta_desc'];
	$meta_keyword = $_POST['meta_keyword'];		
	$piccount = $_POST['noofimgbox'];
}

$cdate = Date('Y-m-d H:i:s');

$qry= "update gallery set `name`='$title', `desc`='$description', `meta_desc`='$meta_desc', `meta_keyword`='$meta_keyword'
		where gallery_id='$gallery_id'";

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
$qry2=" INSERT INTO `gallery_image` (`gallery_id`, `gallery_image`, `cdate`) VALUES" . $qry1;

if($qry1!=""){
$res = mysqli_query($con,$qry2);
}


if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Gallery added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "gallerylist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Gallery not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "gallerylist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>
