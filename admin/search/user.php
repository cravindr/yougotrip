<?php

  
  require('../dbconnect.php');
 
  $emailid=$_POST['query'];
 $query= "SELECT * from userprofile where emailid='$emailid' ";
 //echo $query;
 $rs=mysqli_query($con, $query);
 
  $find=mysqli_num_rows($rs);
 
  echo $find;
 
?>