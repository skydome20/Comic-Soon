<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html;" charset="big5"></meta>
<script language="javascript" src="basic_style.js"></script>

<?php

include("connect.inc.php");

$id = $_POST['id'];
$pw = md5($_POST['pw']);

//�j�M��Ʈw���
$sql = "SELECT * FROM member where account = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//�P�_�b���P�K�X�O�_���ť�
//�H��MySQL��Ʈw�̬O�_���o�ӷ|��
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //�N�b���g�Jsession�A��K���ҨϥΪ̨���
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