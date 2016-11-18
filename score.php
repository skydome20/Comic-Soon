<script language="JavaScript">
function score_suc()
   {
     alert("評分成功！")
   }
function score_fail()
   {
     alert("你之前評過分囉！")
   }
</script>
<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");
	session_start(); 
	$id=$_SESSION['username'];
	$score = $_POST['score'];
	$name  = $_GET['name'];//漫畫名稱
	
	//$sql = "INSERT INTO score (".$name.") values ('$score') WHERE account='$id'";
	$sql = "update score set ".$name."='$score' WHERE account='$id'";
	$result=mysql_query("SELECT * FROM score WHERE account='$id'",$link);
	$row=mysql_fetch_array( $result , MYSQL_ASSOC);

	if( $row[$name] == 0)
	{
		mysql_query($sql);
		print "<script>score_suc()</script>";
		echo "<meta http-equiv=REFRESH CONTENT=0;url=comic_all_member.php?source=".$name.">";
	}
	
	else if( $row[$name] >= 1)
	{
		print "<script>score_fail()</script>";
		echo "<meta http-equiv=REFRESH CONTENT=0;url=comic_all_member.php?source=".$name.">";
	}
?>