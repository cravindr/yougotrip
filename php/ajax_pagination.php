<?php
session_start();
$page_id=$_POST['id'];
$_SESSION['TRAN_PAGE_ID']=$page_id;
echo $page_id;
?>