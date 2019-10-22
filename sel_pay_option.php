<?php
$option=$_POST['checkoutoption'];
if($option=='account')
{
header("Location:account_deduct.php");
}
else
{
}

echo $option;
?>