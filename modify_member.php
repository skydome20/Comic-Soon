<script language="JavaScript">
function score_suc()
   {
     alert("�ק令�\�I")
   }
function score_fail()
   {
     alert("�ק異�ѡI")
   }
</script>
<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");
	session_start(); 
	$id=$_SESSION['username'];
	$name  =  $_POST['name'];
	$sex   =  $_POST['sex'];
	$year  =  $_POST['year'];
	$month =  $_POST['month'];
	$day   =  $_POST['day'];
	$job   =  $_POST['job'];
	$mail  =  $_POST['mail'];
	$test  =  1;
	//�W�r
	if( $name !=null){
	if(mysql_query("update $id set name='$name'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//�ʧO
	if( $sex !=null){
	if(mysql_query("update $id set sex='$sex'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//�~��
	if( $year !=null){
	if(mysql_query("update $id set birth_year='$year'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//���
	if( $month !=null){
	if(mysql_query("update $id set birth_month='$month'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//���
	if( $day !=null){
	if(mysql_query("update $id set birth_day='$day'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//�u�@
	if( $job !=null){
	if(mysql_query("update $id set job='$job'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	//email
	if( $mail !=null){
	if(mysql_query("update $id set email='$mail'"))
	$test =$test + 1;
	else
	$test = $test-10000;
	}
	else ;
	if($test>0){
		print "<script>score_suc()</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';
	}
	else{
		print "<script>score_fail()</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';
	}
?>