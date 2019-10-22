<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$smarty->assign('menu_crm','class="active"');
$smarty->assign('addnewurl','crm_upd.php');
$table_name="crm";
$table_prfield="crm_id";



if($_SESSION['ID_EDIT'] )
{
	$id=$_SESSION['ID_EDIT'];
	
	unset($_SESSION['ID_EDIT']);
	$qry="select * from $table_name where $table_prfield=".$id. " order by $table_prfield desc" ;
	$rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($rs);
	

 // $crm_id=$row['crm_id'];
 // $lead_owner=$row['lead_owner'];
 
  
   $smarty->assign('crmid',$id);
 
  $title=$row['title'];
   $smarty->assign('title',$title);
   
  $first_name=$row['first_name'];
  $smarty->assign('first_name',$first_name);
  $last_name=$row['last_name'];
  $smarty->assign('last_name',$last_name);
  $company=$row['company'];
  $smarty->assign('company',$company);
  $passportno=$row['passportno'];
  $smarty->assign('passportno',$passportno);
  $issue_date=$row['issue_date'];
	if  (fnvalidateDate($issue_date))
		{
			$smarty->assign('issue_date',$issue_date);
		}
  
  $exp_date=$row['exp_date'];
  if  (fnvalidateDate($exp_date))
	  {
	   $smarty->assign('exp_date',$exp_date);
	  }
  $lead_source=$row['lead_source'];
  $smarty->assign('lead_source',$lead_source);
  $industries=$row['industries'];
  $smarty->assign('industries',$industries);
  $address=$row['address'];
  $smarty->assign('address',$address);
  $city=$row['city'];
  $smarty->assign('city',$city);
  $zip=$row['zip'];
	$smarty->assign('zip',$zip);

  $state=$row['state'];
  $smarty->assign('state',$state); 
  $country=$row['country'];
    $smarty->assign('country',$country);
  $income=$row['income'];
    $smarty->assign('income',$income);
  $phone=$row['phone'];
    $smarty->assign('phone',$phone);
  $mobile=$row['mobile'];
    $smarty->assign('mobile',$mobile);  
  $mobile2=$row['mobile2'];
    $smarty->assign('mobile2',$mobile2);
  $fax=$row['fax'];
    $smarty->assign('fax',$fax);
  $email=$row['email'];
    $smarty->assign('email',$email);
  $website=$row['website'];
    $smarty->assign('website',$website);
  $ncdate=$row['ncdate'];
  if  (fnvalidateDate($ncdate))
	  {
		$smarty->assign('ncdate',$ncdate);
	  }
  //$cdate=$row['cdate'];
  //$mdate=$row['mdate'];
  $desc=$row['desc'];
  $smarty->assign('desc',$desc);
  $smarty->assign('addnewurl','crm_edit.php');
}



$smarty->display('header.tpl');
$smarty->display('crm.tpl');
$smarty->display('footer.tpl');



function fnvalidateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}



?>