<?php
session_start();
require('smartysetting.php');
require('source/email.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}


	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');

//  gettiong pack name for sending mail

	$tour_pack_id = $_SESSION['TOUR_PACK_BUY_ID'];
	$qrypack = "select `pack_title`,`adult_price`, `child_price`, `child_wob_price`, `pack_image` from package where pack_id ='$tour_pack_id'";
	$respack = mysqli_query($con,$qrypack);
	$rowpack=mysqli_fetch_array($respack);
	$pack_name=$rowpack['pack_title'];
	
	$name=$_SESSION['TRIP_USER_NAME'];
	
	// for get the invoice text content from database
	$qrycont = "select invoice_text from content_detail";
	$rescont = mysqli_query($con,$qrycont);
	$rowcont = mysqli_fetch_array($rescont);
	// formationg message
		$message = $rowcont['invoice_text'];
		$message = str_replace('{#name}',$name,$message);
		$message = str_replace('{#package_name}', $pack_name,$message);		
		//fnMail($email, $subject, $message);
		
		$retmessage=createinvoice($con);
		if($retmessage=="success")
		{
			$smarty->display('success_msg.tpl');
		}
		else
		{
			$smarty->display('failure_msg.tpl');
		}
		
	
	
	
	$smarty->display('footer.tpl');

	






function RSformat($amount)
{
	return "Rs. ".number_format($amount, 2, '.', '');
}


function createinvoice($con)
{
	$custid=$_SESSION['TRIP_USER_ID'];
	$custname=$_SESSION['TRIP_USER_NAME'];
	$custemail=$_SESSION['TRIP_USER_EMAIL'];
	$invdate=date("Y-m-d");
	$tour_pack_id = $_SESSION['TOUR_PACK_BUY_ID'];
	$qrypack = "select `category_desc`, `pack_title`,`adult_price`, `child_price`, `child_wob_price`, `pack_image` from package where pack_id ='$tour_pack_id'";
	$respack = mysqli_query($con,$qrypack);
	$rowpack=mysqli_fetch_array($respack);
	
	  $itemname =$rowpack['pack_title'];
	  $catagory_desc=$rowpack['category_desc'];
	  $adultqty = $_SESSION['NO_OF_ADULT'];
	  $adultcost = $rowpack['adult_price'];
	  $childqty = $_SESSION['NO_OF_CHILD'];
	  $childcost = $rowpack['child_price'];
	  $childwbqty = $_SESSION['NO_OF_CWB'];
	  $childwbcost = $rowpack['child_wob_price'];
		if(is_numeric($adultqty)) $adultqty=$adultqty; else $adultqty=0;
		if(is_numeric($adultcost)) $adultcost=$adultcost; else $adultcost=0;
		if(is_numeric($childqty)) $childqty=$childqty; else $childqty=0;
		if(is_numeric($childcost)) $childcost=$childcost; else $childcost=0;
		if(is_numeric($childwbqty)) $childwbqty=$childwbqty; else $childwbqty=0;
		if(is_numeric($childwbcost)) $childwbcost=$childwbcost; else $childwbcost=0;
	
	$adultprice=$adultqty*$adultcost;
	$childprice=$childqty*$childcost;
	$childwbprice=$childwbqty*$childwbcost;
	$gross_total =$adultprice+$childprice+$childwbprice;
	$discount=0;
	$net_total=$gross_total-$discount; // for fucture developemnt

		$sql="insert into invoice(cusomer_id,customer_name,inv_date,status,amount,discount,totalamount,balanceamount,category_desc, pack_title)
		values('$custid','$custname','$invdate','created','$gross_total','$discount','$net_total','$net_total','$catagory_desc','$itemname')";
		$row=mysqli_query($con,$sql);
		$invoiceno = mysqli_insert_id($con); 
		
		$sql_detail="insert into invoice_detail(invoiceno,package_name,adultqty,adultprice,childqty,childprice,childwbqty,childwbprice,price) 
					values('$invoiceno','$itemname','$adultqty','$adultcost','$childqty','$childcost','$childwbqty','$childwbcost','$gross_total' )";
		mysqli_query($con,$sql_detail);
		
		return "success";

}// function end



?>




