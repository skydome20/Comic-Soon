<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html;" charset="big5"></meta>

<script language="JavaScript">
function exit()
   {
     alert("已成功登出！歡迎下次光臨");
   }

</script>

<?php
//將session清空
unset($_SESSION['username']);
print "<script>exit()</script>";
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>