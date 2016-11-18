<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="big5" />
<script language="javascript" src="basic_style.js"></script>

<?php

include ("connect.inc.php");
$account   = $_POST['id'];
$password  = $_POST['pw'];
$password2 = $_POST['pw2'];
$pw = md5($_POST['pw']);
$mail =$_POST['mail'];

mysql_query("CREATE TABLE IF NOT EXISTS member(account  char(20) NOT NULL,
											   password char(200) NOT NULL,
											   pw 		char(80) NOT NULL)"  , $link);				 
	if($account != null && $password != null && $mail!=null &&$password2 != null )
	{
		if($password == $password2)
		{
			$result=mysql_query("SELECT * FROM member WHERE account='$account'",$link);
			if($rows=mysql_fetch_array($result,MYSQL_ASSOC))
			{
				print "<script>exist()</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
			}
			else
			{
				$sql = "INSERT INTO member (account, password , pw) values ('$account','$pw' ,'$password')";
				if(mysql_query($sql))
				{
					mysql_query("CREATE TABLE IF NOT EXISTS $account(name 		 char(100) NOT NULL,
																	 email 		 char(100) NOT NULL,
																	 sex  		 char(20)  NOT NULL,
																	 birth_year  int(10)   NOT NULL,
																	 birth_month int(10)   NOT NULL,
																	 birth_day   int(10)   NOT NULL,
																	 job         char(200) NOT NULL						
																	 )" , $link);
					mysql_query ("INSERT INTO $account (email) values ('$mail')");
					mysql_query ("INSERT INTO score (account) values ('$account')");
					print "<script>success()</script>";
					echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
				}
				else
				{
					print "<script>fail()</script>";
					echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
				}
			}
		}
		else
		{
			print "<script>password_fail()</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
		}
	}
	else
	{
		print "<script>wrong()</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
	}
?>


