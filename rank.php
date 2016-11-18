<?php
	header("Content-Type:text/html; charset=big5");
	include("connect.inc.php");
	//$score = $_POST['score'];
	//$name  = $_GET['name'];//漫畫名稱
	$OnePiece=0;$Naruto=0;$Bleach=0;$Fullmetal=0;$FairyTale=0;$Gintama=0;$Hayate=0;$Kuroko=0;$Reborn=0;$Giant=0;
	//航海王
	$result=mysql_query("SELECT OnePiece FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$OnePiece = $OnePiece + $row["OnePiece"];
	}
	//火影忍者
	$result=mysql_query("SELECT Naruto FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Naruto = $Naruto + $row["Naruto"];
	}
	//死神
	$result=mysql_query("SELECT Bleach FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Bleach = $Bleach + $row["Bleach"];
	}
	//鋼之煉金術師
	$result=mysql_query("SELECT Fullmetal FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Fullmetal = $Fullmetal + $row["Fullmetal"];
	}
	//魔導少年
	$result=mysql_query("SELECT FairyTale FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$FairyTale = $FairyTale + $row["FairyTale"];
	}
	//銀魂
	$result=mysql_query("SELECT Gintama FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Gintama = $Gintama + $row["Gintama"];
	}
	//旋風管家
	$result=mysql_query("SELECT Hayate FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Hayate = $Hayate + $row["Hayate"];
	}
	//黑子的籃球
	$result=mysql_query("SELECT Kuroko FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Kuroko = $Kuroko + $row["Kuroko"];
	}
	//家庭教師
	$result=mysql_query("SELECT Reborn FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Reborn = $Reborn + $row["Reborn"];
	}
	//進擊的巨人
	$result=mysql_query("SELECT Giant FROM score ",$link);
	while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
	{
	$Giant = $Giant + $row["Giant"];
	}
	
	
	/*mysql_query("INSERT INTO rank (comic) values ('航海王')");
	mysql_query("INSERT INTO rank (comic) values ('火影忍者')");
	mysql_query("INSERT INTO rank (comic) values ('家庭教師')");
	mysql_query("INSERT INTO rank (comic) values ('銀魂')");
	mysql_query("INSERT INTO rank (comic) values ('死神')");
	mysql_query("INSERT INTO rank (comic) values ('魔導少年')");
	mysql_query("INSERT INTO rank (comic) values ('進擊的巨人')");
	mysql_query("INSERT INTO rank (comic) values ('鋼之煉金術師')");
	mysql_query("INSERT INTO rank (comic) values ('黑子的籃球')");
	mysql_query("INSERT INTO rank (comic) values ('旋風管家')");*/
	
	mysql_query("update rank set score='$OnePiece' WHERE comic='航海王'");
	mysql_query("update rank set score='$Naruto' WHERE comic='火影忍者'");
	mysql_query("update rank set score='$Reborn' WHERE comic='家庭教師'");
	mysql_query("update rank set score='$Gintama' WHERE comic='銀魂'");
	mysql_query("update rank set score='$Bleach' WHERE comic='死神'");
	mysql_query("update rank set score='$FairyTale' WHERE comic='魔導少年'");
	mysql_query("update rank set score='$Giant' WHERE comic='進擊的巨人'");
	mysql_query("update rank set score='$Fullmetal' WHERE comic='鋼之煉金術師'");
	mysql_query("update rank set score='$Hayate' WHERE comic='旋風管家'");
	mysql_query("update rank set score='$Kuroko' WHERE comic='黑子的籃球'");
	

	
	
	
	
	
?>