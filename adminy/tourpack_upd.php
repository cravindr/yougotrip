<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');


if($_POST){
	
	$packageid = $_POST['pack_id'];
	$packagetype = $_POST['packagetype'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$includes = $_POST['includes'];
	$excludes = $_POST['excludes'];
	$itinerary = $_POST['itinerary'];
	$dac = $_POST['dac'];
	$adultprice = $_POST['adultprice'];
	$childprice = $_POST['childprice'];
	$childwobprice = $_POST['childwobprice'];
	$pro_image1 = $_POST['pro_image1'];
	$meta_desc = $_POST['meta_desc'];
	$meta_keyword = $_POST['meta_keyword'];	
	$piccount = $_POST['noofimgbox'];
	
	$image_ret1 = imageUpload('pro_image1',1);
	
}

$mdate = Date('Y-m-d H:i:s');

$qry= "update package set `category_desc`='$packagetype', `pack_title`='$title', `pack_desc`='$description', `pack_includes`='$includes',
 `pack_excludes`='$excludes', `itinerary`='$itinerary', `dateandcost`='$dac', `adult_price`='$adultprice', `child_price`='$childprice',
  `child_wob_price`='$childwobprice', `pack_image`='$image_ret1', `createdby`='', `mdate`='$mdate', `modifyby`='',
   `meta_desc`='$meta_desc', `meta_keyword`='$meta_keyword' where `pack_id`='$packageid'";
  
  if($image_ret1 == '0' || $image_ret1 == ''){
   $qry = str_replace("`pack_image`='$image_ret1',",'',$qry);
  }

$res = mysqli_query($con,$qry);
$qry1="";

for($i=2;$i<=$piccount;$i++){

	$image_ret = imageUpload("pro_image$i",$i); 
	if($image_ret!==0)
	{

			if ($qry1=="")
				$qry1= $qry1. " ('$packageid', '$image_ret', '$cdate')";
			else
					$qry1= $qry1. ",('$packageid', '$image_ret', '$cdate')";
	}
}
$qry2=" INSERT INTO `package_image` (`pack_id`, `pack_image`, `cdate`) VALUES" . $qry1;

if($qry1!=""){
$res = mysqli_query($con,$qry2);
}



if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Tour Package updated Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "tourpacklist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Tour Package not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "tourpacklist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>
