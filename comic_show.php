<!DOCTYPE html>

<?php 
	session_start(); 
	if($_SESSION!=null)
	echo '<meta http-equiv=REFRESH CONTENT=0;url=member_comic_show.php>';
?>


<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
	<link type="text/css" rel="stylesheet" href="comic.css"></link>
	<script language="javascript" src="basic_style.js"></script>
	<script language="javascript" src="comic.js"></script>
	
	
	<title>COMIC SOON</title>
</head>

<body>
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
	
		<?php
			echo"
				
				<a id='show' href='comic_all.php?source=OnePiece'><img id='comic' title ='航海王'         src=comic/all/1.jpg></image></a>
				<a id='show' href='comic_all.php?source=Naruto'><img id='comic' title ='火影忍者'         src=comic/all/2.jpg></image></a>
				<a id='show' href='comic_all.php?source=Kuroko'><img id='comic' title ='影子籃球員'       src=comic/all/3.jpg></image></a>
				<a id='show' href='comic_all.php?source=Gintama'><img id='comic' title ='銀魂'            src=comic/all/4.jpg></image></a>
				<a id='show' href='comic_all.php?source=Reborn'><img id='comic' title ='家庭教師'         src=comic/all/5.jpg></image></a>
				<a id='show' href='comic_all.php?source=Bleach'><img id='comic' title ='死神'             src=comic/all/6.jpg></image></a>
				<a id='show' href='comic_all.php?source=Hayate'><img id='comic' title ='旋風管家'         src=comic/all/7.jpg></image></a>
				<a id='show' href='comic_all.php?source=FairyTale'><img id='comic' title ='魔導少年'      src=comic/all/8.jpg></image></a>
				<a id='show' href='comic_all.php?source=Fullmetal'><img id='comic' title ='鋼之煉金術師'  src=comic/all/9.jpg></image></a>
				<a id='show' href='comic_all.php?source=Giant'><img id='comic' title ='進擊的巨人'    	  src=comic/all/10.jpg></image></a>
				";
		?>
		<br>
		<center><a href="index.php" class="font_5">返回首頁</a></center>
	</div>
</body>
</html>