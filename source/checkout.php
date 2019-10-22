<?php

include('dbconnect.php');
$chechout=new clscheckout;

$chechout->adult_count=2;
$chechout->child_count=1;
$chechout->child_cwb_count=1;
echo $chechout->fnTotel();


class clscheckout{
   public  $pack_id;
   public  $pack_title;
   public  $user_id;
   public  $adult_count;
   public  $child_count;
   public  $child_cwb_count;
   public  $con;
   public  $adult_price;
   public  $child_price;
   public  $child_wob_price;
   public  $total;
 
	  function setConn ($conn) {
		  $con=$conn;
	  }

	   function fnTotel () {
			/*$qry='select * from package where pack_id='.$pack_id ;
			$rs=mysqli_query($con,$qry);
			if($rs)
				{
				$row=mysqli_fetch_array($rs);
				$child_wob_price=$row['child_wob_price'];
				$adult_price=$row['adult_price'];
				$child_price=$row['child_price'];
				}*/
			
			$adult_total=$adult_price*$adult_count;	
			$chidl_total=$child_price*$child_count;
			$child_wob_total=$child_wob_price*$child_cwb_count;
			$total = $adult_total+$chidl_total+$child_wob_total;
			return $adult_total+$chidl_total+$child_wob_total;	
	   }
}

?>