<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri = $_POST['pri'];
	$dis = $_POST['dis'];
	
	
	if($dis == 1){
		$qry = "delete from display where pack_id='$id'";
		$res= mysqli_query($con,$qry);
	}else if($dis == 0){
		$qry = "insert into display(`pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`) select `pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword` from package where pack_id='$id'";
		$res= mysqli_query($con,$qry);
	}
	
}