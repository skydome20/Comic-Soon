<script language="JavaScript">
function score_suc()
   {
     alert("�������\�I")
   }
function score_fail()
   {
     alert("�A���e���L���o�I")
   }
</script>
<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");
	session_start(); 
	$id=$_SESSION['username'];
	$score = $_POST['score'];
	$name  = $_GET['name'];//���e�W��
	
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