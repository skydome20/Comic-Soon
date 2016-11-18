<!DOCTYPE html>
<?php 
	include("rank.php");
	session_start(); 
	if($_SESSION!=null)
	echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';
	
	if(isset($_COOKIE["visit"]) == false ){
	setcookie("visit", 1 , time()+60);
	}
?>



<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
	<script language="javascript" src="basic_style.js"></script>
	<script language="javascript" src="pool.js"></script> 
	
	
	<title>COMIC SOON</title>
</head>

<body>

	<!---網站名稱header--->
	<!--<div id="header_1"> </div>-->
	
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
		<!---左邊功能列內容--->
		<div id="left_content">
			<ul>
				<li>
					<a href="javascript:show_login()">會員登入</a>
				</li>
				<li>
					<a href="javascript:show_reg()" >註冊會員</a>
				</li>
				<li>
					<a href="javascript:waring()" >海報精選</a>
				</li>
				<li>
					<a href="comic_show.php">漫畫放送</a>
				</li>
			</ul>
		</div>
		<!---右邊公佈欄內容--->
		<div id="right_content">
			<center class="font_3">最新消息</center>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=523&source=Bleach" target="_block">死神:523<br></a>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=616&source=Naruto" target="_block">火影忍者:616<br></a>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=695&source=OnePiece" target="_block">航海王:695<br></a>
			‧2013.1.17　<img src="new.png"></img> <a id="font" href="show.php?No=41&source=Giant" target="_block">進擊的巨人:41<br></a>
			‧2013.1.10　<img src="new.png"></img> <a id="font" href="show.php?No=390&source=Hayate" target="_block">旋風管家:390<br></a>
			<br>
			<table width='500px' bgcolor='#aaaa66' rules='all' frame='box'>
			<tr><th colspan=2><center class='font_3'>漫畫評分表</center></tr>
			<tr><td ><center class='font_4'>漫畫名稱</center><td><center class='font_4'>得分數(會員評分統計)</center></tr>
			<?php
			$result=mysql_query("SELECT  * FROM rank ORDER BY score DESC",$link);
			while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
			echo"
			<tr><td><center>".$row['comic']."</center><td><center>".$row['score']."</tr>
				";
			?>
			</table>
		</div>
		
		<!---AJAX--->
		<div id="poll">
			<center>你喜歡這個網站嗎?</center>
			<form>
			<font class="font_8">喜歡
			<input type="radio" name="vote" 
			value="0" onclick="getVote(this.value)">
			<br />
			<font class="font_8">不喜歡
			<input type="radio" name="vote" 
			value="1" onclick="getVote(this.value)">

			</form>
		</div>
	</div>
	
	
	<!---登入視窗--->

	<div id="login">
			<form  method="post" action="login.php">
				<center><font class="font_2" size="5">會員登入<p></font></center>
				<center><font class="font_1">帳號：</font> <input type="text" name="id" size="30"> <p></center>
				<center><font class="font_1">密碼：</font> <input type="password" name="pw" size="30"><p></center>
				<center>
					<input type="submit" value="登入">
					<input type="reset" onclick="close_login()" value="取消">
				</center>
			</form>
	</div>
	
	<!---註冊視窗--->
		<div id="reg" onreset ="close_reg()">
						<form  method="post" action="reg.php">
						<center>	<font class="font_2" size="5">會員註冊<p></font></center>
							<font class="font_1">*帳號：</font> <input class="input" type="text" name="id" size="30"> <p>
							<font class="font_1">*密碼：</font>  <input class="input"type="password" name="pw" size="30"><p>
							<font class="font_1">*確認密碼：</font>  <input class="input_1"type="password" name="pw2" size="30"><p>
							<font class="font_1">*E-mail：</font>  <input class="input_2"type="text" name="mail" size="30"><p>
						<center>	<input type="submit" value="提交"><input type="reset" onclick="close_login()" value="取消"></center>
						
						</form>
				</div>
		</div>
	
</body>
</html>