<!DOCTYPE html>
<?php session_start(); ?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
	<link type="text/css" rel="stylesheet" href="week.css"></link>
	<script language="javascript" src="basic_style.js"></script>
	
	
	<title>week_comic</title>
</head>

<body>

	<!---網站名稱header--->
	
	
	<!---功能橫欄header--->
	<div id="header_2">
		<!---時鐘--->
		<div id="clock">
			<script language="javascript">
				today=new Date();
				var hours = today.getHours();
				var minutes = today.getMinutes();
				var seconds = today.getSeconds();
				var timeValue = "<FONT COLOR=white>" + ((hours >12) ? hours -12 :hours); timeValue += ((minutes < 10) ? "<BLINK><FONT COLOR=white>:</FONT></BLINK>0" : "<BLINK><FONT COLOR=white>:</FONT></BLINK>") + minutes+"</FONT></FONT>";
				timeValue += (hours >= 12) ? "<FONT COLOR=white><I><B>.pm</B></I></FONT>" : "<FONT COLOR=white><B><I>.am</I></B></FONT>";
				function initArray(){
				this.length=initArray.arguments.length
				for(var i=0;i<this.length;i++)
				this[i+1]=initArray.arguments  }
				var d=new initArray("<font color=RED>星期日","<font color=white>星期一","<font color=white>星期二","<font color=white>星期三","<font color=white>星期四","<font color=white>星期五","<font color=red>星期六"); document.write("<font color=white>",today.getYear()+1900,"<font color=white>年","<font color=white>",today.getMonth()+1,"<font color=white>月","<font color=white>",today.getDate(),"<font color=white>日 </FONT>"," ",timeValue);  //-->
			</script>
		</div>
		
		<!---頁面連結按鈕--->
		<ul>
			<li>
				<a href="index.php">首頁</a><br>
			</li>
			<li>
				<a href="week.php" >週刊</a><br>
			</li>
			<li>
				<a href="month.php" >月刊</a><br>
			</li>
		</ul>
	</div>
	
	<!---內容--->
	<div id="content">
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=OnePiece">航海王</th>
					   <td align="center"><a id="number_name" href="show.php?No=693&source=OnePiece"  target="_block">693</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=694&source=OnePiece"  target="_block">694</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=695&source=OnePiece"  target="_block">695</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Naruto">火影忍者</th>
					   <td align="center"><a id="number_name" href="show.php?No=614&source=Naruto"  target="_block">614</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=615&source=Naruto"  target="_block">615</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=616&source=Naruto"  target="_block">616</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Kuroko">黑子籃球員</th>
					   <td align="center"><a id="number_name" href="show.php?No=194&source=Kuroko"  target="_block">194</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=195&source=Kuroko"  target="_block">195</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=196&source=Kuroko"  target="_block">196</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Gintama">銀魂</th>
					   <td align="center"><a id="number_name" href="show.php?No=427&source=Gintama"  target="_block">427</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=428&source=Gintama"  target="_block">428</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=429&source=Gintama"  target="_block">429</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Reborn">家庭教師</th>
					   <td align="center"><a id="number_name" href="show.php?No=407&source=Reborn"  target="_block">407</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=408&source=Reborn"  target="_block">408</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=409&source=Reborn"  target="_block">409</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Bleach">死神</th>
					   <td align="center"><a id="number_name" href="show.php?No=521&source=Bleach"  target="_block">521</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=522&source=Bleach"  target="_block">522</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=523&source=Bleach"  target="_block">523</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Hayate">旋風管家</th>
					   <td align="center"><a id="number_name" href="show.php?No=388&source=Hayate"  target="_block">388</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=389&source=Hayate"  target="_block">389</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=390&source=Hayate"  target="_block">390</a></td>
					 </tr>
				</table>
			</div>
			<!---漫畫--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=FairyTale">魔導少年</th>
					   <td align="center"><a id="number_name" href="show.php?No=311&source=FairyTale"  target="_block">311</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=312&source=FairyTale"  target="_block">312</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=313&source=FairyTale"  target="_block">313</a></td>
					 </tr>
				</table>
			</div>
			
	</div>

</body>
</html>