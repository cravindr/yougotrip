<?php

session_start();
require('smartysetting.php');
require('pagination.php');  // paginatgion step 1 of 4
require('authendicate.php');


if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}
$smarty->assign('name',$_SESSION['TRIP_USER_NAME']);

// Paginatin step 2 of 4

$tranpageid= $_SESSION['TRAN_PAGE_ID'];
unset($_SESSION['TRAN_PAGE_ID']);
if ($tranpageid=='')
	{
		$tranpageid=1;
	}


if(isset($_SESSION['TRIP_USER_ID'])){
	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');

	$smarty->assign('tbl_th_invoiceid','Invoice No');
	$smarty->assign('tbl_th_date','Date');
	$smarty->assign('tbl_th_packtype','Pack Type');
	$smarty->assign('tbl_th_packname','Package Name');
	$smarty->assign('tbl_th_totalamount','Total Amount');
	$smarty->assign('tbl_th_balanceamount','Balance Amount');
	$smarty->assign('tbl_th_status','Status');
	$smarty->assign('tbl_th_comments','Action');
	
	
	$smarty->display('order_tab_header.tpl');
	$user_id = $_SESSION['TRIP_USER_ID'];
	// Paginaetion  step 3 of 4
	
	
	$pagesize=10;
	$lowerlimit=($tranpageid-1)*$pagesize;
	//$upperlimit=($tranpageid)*$pagesize;
	$upperlimit=$pagesize;
	
	$qry = "select * from invoice where cusomer_id='$user_id' and agent_id=0 order by inv_date  desc,invoiceno desc";
	$res = mysqli_query($con,$qry);
	$rcount=mysqli_num_rows($res);
	$pagecount=$rcount/$pagesize;

	if (($rcount % $pagesize) !=0)
		{
		$pagecount=$pagecount+1;	
		}
	
	$limitset=" LIMIT $lowerlimit,$upperlimit ";

	
	// executing the query with limit
	$qrywithlimit = $qry.$limitset;
	$res = mysqli_query($con,$qrywithlimit);
	
	
	
	
	
	
	//$res = mysqli_query($con,$qry);
	$sno=1;
	while($row = mysqli_fetch_array($res)){
		$invoiceno= $row['invoiceno'];
		
		$smarty->assign('sno',$sno);
		$smarty->assign('tbl_row_invoiceid',$row['invoiceno']);
		//$cdate = date("d-m-Y", strtotime($row['inv_date ']));
		$cdate = date("d-m-Y", strtotime($row['inv_date']));
		$smarty->assign('tbl_row_date',$cdate);
		//$smarty->assign('tbl_row_packtype',$row['credit']);
		//$smarty->assign('tbl_row_packname',$row['debit']);
		
		$smarty->assign('tbl_row_packtype',$row['category_desc']);
		$smarty->assign('tbl_row_packname',$row['pack_title']);
		
		$smarty->assign('tbl_row_totalamount',$row['totalamount']);
		$smarty->assign('tbl_row_balanceamount',$row['balanceamount']);
		$smarty->assign('tbl_row_status',$row['status']);
		
		if($row['status']=='created')
		{
			$action="<input class='btn-u' type='button' name='btnpaynow'  onclick='paynow($invoiceno)'  value='PayNow' />
					 <input class='btn-u' type='button' name='btncancel'  onclick='cancelorder($invoiceno)'  value='Cancel' />";
					 
		   /*$action="<a data-toggle='modal' href='#LoginModal'> <input class='btn-u' type='button' name='btnpaynow'   value='Pay' /></a>
		   <input class='btn-u' type='button' name='btncancel'  onclick='cancelorder($invoiceno)'  value='Cancel' />";*/
		}
		elseif(strtolower($row['status'])=='canceled')
		{
			$action="";
		}
		elseif(strtolower($row['status'])=='paid' )
		{
			$action="";
		}
		elseif(strtolower($row['status'])=='part')
		{
			$action="<input class='btn-u' type='button' name='btnpaynow'  onclick='paynowpart($invoiceno)'  value='PayNow' />";
		}
		else
		{
				$action="<input class='btn-u' type='button' name='btnpaynow'  onclick='paynowpart($invoiceno)'  value='PayNow' />";
		}
		
		
		$comments = substr($row['comments'], 0, 23);
		
		$smarty->assign('tbl_row_action',$action);
		$smarty->display('order_tab_body.tpl');
		$sno=$sno+1;
	}
	
	$smarty->display('order_tab_footer.tpl');
	echo fnBuidPagination($pagecount,$tranpageid);  // Paginatin step 4 of 4
	
	$smarty->display('footer.tpl');
	$smarty->display('link_js_orderlist.tpl');  //  Paginatin step 4 of 5
	
}

else
{
		Header("Location:login.php");
}


?>




