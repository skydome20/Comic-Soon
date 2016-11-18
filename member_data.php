<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");

	$id = $_SESSION['username'];
	$result=mysql_query("SELECT * FROM $id ",$link);
	$rows=mysql_fetch_array( $result , MYSQL_ASSOC) ;
?>