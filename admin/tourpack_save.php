<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('image_upload.php');
require('source/trail_space.php');
require('formaturl.php');
//$adminid = $_SESSION['ADMIN_ID'];

if($_POST){
	
	$packagetype = $_POST['packagetype'];
	$title = $_POST['title'];
	$title_desc = $_POST['title_desc'];
	
	$title=addBR($title);
	$description = $_POST['description'];
	$place_desc = $_POST['place_desc'];
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
	$staticurl = $_POST['staticurl'];	
	$staticurl=formatUrl($staticurl);
	
	$piccount = $_POST['noofimgbox'];
	//$theme= $_POST['theme'];
	$image_ret1 = imageUpload('pro_image1',1);
	
		$themelist="";
		$theme = $_POST['theme'];
		

	
		foreach ($theme as $themevalue){
   		 if ($themelist=="")
			{
	       $themelist=$themelist.$themevalue;
			}
		   else
		   {
		   $themelist=$themelist. ",".$themevalue;
		   }
		}
		
		

	
}

$cdate = Date('Y-m-d H:i:s');

$qry= "insert into package (`category_desc`, `pack_title`,`title_desc`, `pack_desc`,`place_desc`, `pack_includes`, `pack_excludes`,
 `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`,`staticurl`,`theme`)
		 values('$packagetype','$title','$title_desc','$description','place_desc','$includes','$excludes','$itinerary','$dac','$adultprice',
		 '$childprice','$childwobprice','$image_ret1','1','','$cdate','','','$meta_desc','$meta_keyword','$staticurl','$themelist')";
		 

$res = mysqli_query($con,$qry);
$id = mysqli_insert_id($con);  // package id


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
$qry2=" INSERT INTO `package_image` (`pack_id`, `pack_image`, `cdate`) VALUES" . $qry1;

if($qry1!=""){
$res = mysqli_query($con,$qry2);
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Tour Package added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "tourpacklist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Tour Package not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "tourpack.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>
