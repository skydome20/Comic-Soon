<meta http-equiv="content-type" content="text/html" charset="big5"></meta>

<?php
	//�ϥζW�s�����o�����ƭ�
	$source=$_GET['source'];//���e�W��
	$No=$_GET['No'];        //�ܼ�
	echo "���e�W��:".$source."<br>";
	echo "���ܸܼ�: No.".$No."<br><br>"; 
	
	//�Ѭ����ƭȨ��o�Ϥ��Ҧb��}�A��X�����Ϥ�
	for($i=1;$i<=200;$i++){
	$picture = "comic/".$source."/".$No."/".$i.".png";
	//�P�_�Ϥ��s���s�b
	if( file_exists($picture) )
	echo "			<style>
						img{
							margin-top:30px;
						}
					</style>
		  <img src=".$picture."></image>
		  <br>
		 ";
	
	else
		;
	}
?>
