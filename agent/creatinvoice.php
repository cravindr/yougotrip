<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$totalpack=$_POST['totalpack'];
$agent_id=$_SESSION['AGENT_ID'];


$custname=$_POST['customername'];
$custid=$_POST['custid'];
$invdate=date("Y-m-d");
$sql="insert into invoice(cusomer_id,customer_name,inv_date,status,agent_id) values('$custid','$custname','$invdate','created','$agent_id')";
$row=mysqli_query($con,$sql);
$invoiceno = mysqli_insert_id($con); 

$itemname = $_POST['item'];
$adultqty = $_POST['aqty'];
$adultcost = $_POST['acost'];
$childqty = $_POST['cqty'];
$childcost = $_POST['ccost'];
$childwbqty = $_POST['cwbqty'];
$childwbcost = $_POST['cwbcost'];
$price = $_POST['price'];

$totalprice=0;

for ($i=0; $i<sizeof($itemname); $i++)
	{
	$item = $itemname[$i];  
	$aqty = $adultqty[$i];
	$acost = $adultcost[$i];
	$cqty = $childqty[$i];
	$ccost = $childcost[$i];
	$cwbqty = $childwbqty[$i];
	$cwbcost = $childwbcost[$i];
	$tprice = $price[$i];
	
	if(is_numeric($aqty)) $aqty=$aqty; else $aqty=0;
	if(is_numeric($acost)) $acost=$acost; else $acost=0;
	if(is_numeric($cqty)) $cqty=$cqty; else $cqty=0;
	if(is_numeric($ccost)) $ccost=$ccost; else $ccost=0;
	if(is_numeric($cwbqty)) $cwbqty=$aqty; else $cwbqty=0;
	if(is_numeric($cwbcost)) $cwbcost=$cwbcost; else $cwbcost=0;
	
	$tprice=($aqty*$acost)+($cqty*$ccost)+($cwbqty*$cwbcost);
	$totalprice=$totalprice+$tprice;
	
	$sql_detail="insert into invoice_detail(invoiceno,package_name,adultqty,adultprice,childqty,childprice,childwbqty,childwbprice,price) 
				values('$invoiceno','$item','$aqty','$acost','$cqty','$ccost','$cwbqty','$cwbcost','$tprice' )";
	mysqli_query($con,$sql_detail);
	}


$sql_update_amount="UPDATE `invoice` SET `amount` = '$totalprice',
`totalamount` = '$totalprice' WHERE `invoiceno` ='$invoiceno'";
$res=mysqli_query($con,$sql_update_amount);


if($res){
	header('Location:paymentoption.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Customer not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "invoice.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_ticket";
	header('Location:result.php');
}





?>