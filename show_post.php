<?php
	$source=$_GET['source'];//漫畫名稱
	$i=$_GET['num'];//漫畫話數
	$picture="comic/".$source."/post/".$i.".jpg";
	echo " 
		<img  src=".$picture."></image> 

		";
	
	?>