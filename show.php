<meta http-equiv="content-type" content="text/html" charset="big5"></meta>

<?php
	//使用超連結取得相關數值
	$source=$_GET['source'];//漫畫名稱
	$No=$_GET['No'];        //話數
	echo "漫畫名稱:".$source."<br>";
	echo "此話話數: No.".$No."<br><br>"; 
	
	//由相關數值取得圖片所在位址，輸出全部圖片
	for($i=1;$i<=200;$i++){
	$picture = "comic/".$source."/".$No."/".$i.".png";
	//判斷圖片存不存在
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
