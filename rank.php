<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");
	//$score = $_POST['score'];
	//$name  = $_GET['name'];//���e�W��
	$OnePiece=0;$Naruto=0;$Bleach=0;$Fullmetal=0;$FairyTale=0;$Gintama=0;$Hayate=0;$Kuroko=0;$Reborn=0;$Giant=0;
	//�����
	$result=mysql_query("SELECT OnePiece FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$OnePiece = $OnePiece + $row["OnePiece"];
	}
	//���v�Ԫ�
	$result=mysql_query("SELECT Naruto FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Naruto = $Naruto + $row["Naruto"];
	}
	//����
	$result=mysql_query("SELECT Bleach FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Bleach = $Bleach + $row["Bleach"];
	}
	//�����Ҫ��N�v
	$result=mysql_query("SELECT Fullmetal FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Fullmetal = $Fullmetal + $row["Fullmetal"];
	}
	//�]�ɤ֦~
	$result=mysql_query("SELECT FairyTale FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$FairyTale = $FairyTale + $row["FairyTale"];
	}
	//�Ȼ�
	$result=mysql_query("SELECT Gintama FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Gintama = $Gintama + $row["Gintama"];
	}
	//�ۭ��ޮa
	$result=mysql_query("SELECT Hayate FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Hayate = $Hayate + $row["Hayate"];
	}
	//�¤l���x�y
	$result=mysql_query("SELECT Kuroko FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Kuroko = $Kuroko + $row["Kuroko"];
	}
	//�a�x�Юv
	$result=mysql_query("SELECT Reborn FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Reborn = $Reborn + $row["Reborn"];
	}
	//�i�������H
	$result=mysql_query("SELECT Giant FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Giant = $Giant + $row["Giant"];
	}
	
	
	/*mysql_query("INSERT INTO rank (comic) values ('�����')");
	mysql_query("INSERT INTO rank (comic) values ('���v�Ԫ�')");
	mysql_query("INSERT INTO rank (comic) values ('�a�x�Юv')");
	mysql_query("INSERT INTO rank (comic) values ('�Ȼ�')");
	mysql_query("INSERT INTO rank (comic) values ('����')");
	mysql_query("INSERT INTO rank (comic) values ('�]�ɤ֦~')");
	mysql_query("INSERT INTO rank (comic) values ('�i�������H')");
	mysql_query("INSERT INTO rank (comic) values ('�����Ҫ��N�v')");
	mysql_query("INSERT INTO rank (comic) values ('�¤l���x�y')");
	mysql_query("INSERT INTO rank (comic) values ('�ۭ��ޮa')");*/
	
	mysql_query("update rank set score='$OnePiece' WHERE comic='�����'");
	mysql_query("update rank set score='$Naruto' WHERE comic='���v�Ԫ�'");
	mysql_query("update rank set score='$Reborn' WHERE comic='�a�x�Юv'");
	mysql_query("update rank set score='$Gintama' WHERE comic='�Ȼ�'");
	mysql_query("update rank set score='$Bleach' WHERE comic='����'");
	mysql_query("update rank set score='$FairyTale' WHERE comic='�]�ɤ֦~'");
	mysql_query("update rank set score='$Giant' WHERE comic='�i�������H'");
	mysql_query("update rank set score='$Fullmetal' WHERE comic='�����Ҫ��N�v'");
	mysql_query("update rank set score='$Hayate' WHERE comic='�ۭ��ޮa'");
	mysql_query("update rank set score='$Kuroko' WHERE comic='�¤l���x�y'");
	

	
	
	
	
	
?>