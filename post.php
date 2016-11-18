<!DOCTYPE html>
<?php 
	session_start(); 
	include("rank.php");
	if(!($_SESSION['username']!=null))
	echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';

?>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
	<link type="text/css" rel="stylesheet" href="comic.css"></link>
	<script language="javascript" src="basic_style.js"></script>
	
	
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
				<a href="member.php">首頁</a><br>
			</li>
			<li>
				<a href="week_member.php" >週刊</a><br>
			</li>
			<li>
				<a href="month_member.php" >月刊</a><br>
			</li>
		</ul>
	</div>
	
	<!---內容--->
	<div id="content">
		<!---左邊功能列內容--->
		<div id="left_content">
			<ul>
				<li>
					<a href="post.php?source=Onepiece">航海王</a>
				</li>
				<li>
					<a href="post.php?source=Naruto">火影忍者</a>
				</li>
				<li>
					<a href="post.php?source=Hayate">旋風管家</a>
				</li>
				<li>
					<a href="post.php?source=Reborn">家庭教師</a>
				</li>
				<li>
					<a href="post.php?source=Kuroko">黑子的籃球</a>
				</li>
				<li>
					<a href="post.php?source=Gintama">銀魂</a>
				</li>
				<li>
					<a href="post.php?source=FairyTale">魔導少年</a>
				</li>
				<li>
					<a href="post.php?source=Bleach">死神</a>
				</li>
				<li>
					<a href="post.php?source=Giant">進擊的巨人</a>
				</li>
				<li>
				<a href="post.php?source=Fullmetal">鋼煉金術師</a>
				</li>
			</ul>
		</div>
		<!---右邊公佈欄內容--->
		<div id="right_content_post">
			<?php
				
				$source=$_GET['source'];//漫畫名稱
				for($i=1;$i<=20;$i++){
				$picture="comic/".$source."/post/".$i.".jpg";
				if( file_exists($picture) )
				echo " 
						<a  href='show_post.php?source=".$source."&num=".$i."' target='_block'><img id='show_post' src=".$picture."></image> </a>
						
					 ";
				}
			?>
		</div>
	</div>
</body>
</html>







