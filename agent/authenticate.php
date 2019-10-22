<?php
session_start();

if($_SESSION['AGENT_ID'] == ''){
	header("location:index.php");
}

?>