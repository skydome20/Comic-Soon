<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html;" charset="big5"></meta>

<script language="JavaScript">
function exit()
   {
     alert("�w���\�n�X�I�w��U�����{");
   }

</script>

<?php
//�Nsession�M��
unset($_SESSION['username']);
print "<script>exit()</script>";
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>