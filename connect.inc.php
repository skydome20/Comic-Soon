<meta  charset="utf-8"></meta>

<?php

$server="localhost";
$user="root";
$pw="123";
$db="project";

$link=mysql_connect($server,$user,$pw) or die ("can't connect to database");
mysql_query("CREATE DATABASE IF NOT EXISTS project");
mysql_select_db($db, $link) or die ("can't connect to table");

?>
