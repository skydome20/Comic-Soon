<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html;" charset="big5"></meta>
<script language="javascript" src="basic_style.js"></script>

<?php

include("connect.inc.php");

$id = $_POST['id'];
$pw = md5($_POST['pw']);

//搜尋資料庫資料
$sql = "SELECT * FROM member where account = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
		
        print "<script>success_l()</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';
}
else
{
        print "<script>fail_l()</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
}
?>