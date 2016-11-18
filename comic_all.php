<!DOCTYPE html>


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
		
	
		<!---漫畫圖片顯示--->
			<?php
				
				$source=$_GET['source'];//漫畫名稱
				echo " 
						<img id='picture' title='".$source."' src=comic/".$source."/logo.jpg></image> 
						<br>
					 ";
			?>
		<!---漫畫畫數全顯示--->
			<div id="all">
				<?php
					for($i=1;$i<=1000;$i++){
						$comic = "comic/".$source."/".$i;
						if(file_exists($comic))
						echo"<a href='show.php?No=".$i."&source=".$source."' id='number' target='_block'>第".$i."話</a>";
						else ;
					}
				?>
			</div>
			
			<center><a href="comic_show.php" class="font_5">返回漫畫放送</a></center>
		
	</div>
</body>
</html>