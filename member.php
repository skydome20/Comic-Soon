<!DOCTYPE html>
<?php 
	session_start(); 
	include("rank.php");
	include("member_data.php");
	if(!($_SESSION['username']!=null))
	echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';

?>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
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
					<a href="javascript:show_member()">會員資料</a>
				</li>
				<li>
					<a href="javascript:show_member_m()">修改資料</a>
				</li>
				<li>
					<a href="comic_show_member.php">漫畫放送</a>
				</li>
				<li>
					<a href="post.php?source=Onepiece" >海報精選</a>
				</li>
				<li>
					<a href="logout.php">登出</a>
				</li>
			</ul>
		</div>
		<!---右邊公佈欄內容--->
		<div id="right_content">
			<!---最新消息--->
			<center class="font_3">最新消息</center>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=523&source=Bleach" target="_block">死神:523<br></a>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=616&source=Naruto" target="_block">火影忍者:616<br></a>
			‧2013.1.18　<img src="new.png"></img> <a id="font" href="show.php?No=695&source=OnePiece" target="_block">航海王:695<br></a>
			‧2013.1.17　<img src="new.png"></img> <a id="font" href="show.php?No=41&source=Giant" target="_block">進擊的巨人:41<br></a>
			‧2013.1.10　<img src="new.png"></img> <a id="font" href="show.php?No=390&source=Hayate" target="_block">旋風管家:390<br></a>
			<br>
			<!---漫畫評分表--->
			<table width="500px" bgcolor='#aaaa66' rules="all" frame="box">
			<tr><th colspan=2><center class="font_3">漫畫評分表</center></tr>
			<tr><td ><center class="font_4">漫畫名稱</center><td><center class="font_4">得分數(會員評分統計)</center></tr>
			<?php
			$result=mysql_query("SELECT  * FROM rank ORDER BY score DESC",$link);
			while($row=mysql_fetch_array( $result , MYSQL_ASSOC) )
			echo"
			<tr><td><center>".$row['comic']."</center><td><center>".$row['score']."</tr>
				";
			?>
			</table>
		</div>
	</div>
	<!---會員資料視窗--->
	
	<div id="data">

				<center><font class="font_5" >會員資訊<p></font></center>
				<font class="font_7">帳號：</font> <?php echo $_SESSION['username'] ?><p>
				<font class="font_7">姓名：</font> <?php echo $rows['name'] ?><p>
				<font class="font_7">性別：</font>  <?php echo $rows['sex'] ?><p>
				<font class="font_7">生日：</font> <?php echo $rows['birth_year'] ?>年 <?php echo $rows['birth_month'] ?>月<?php echo $rows['birth_day'] ?>日<p>
				<font class="font_7">工作：</font> <?php echo $rows['job'] ?> <p>	
				<font class="font_7">E-mail：</font> <?php echo $rows['email'] ?> <p>
				<center><input type="reset" onclick="close_member()" value="關閉"></center>
	</div>

	<div id="data_m" >
			<form  method="post" action="modify_member.php">
				<center><font class="font_5" >資訊新增/修改<p></font></center>
				<font class="font_7">姓名：</font> <input type="text" name="name" size="20"> <p>
				<font class="font_7">性別：</font>  <select name='sex'>
													<option value='男生'> 男生 </option>
													<option value='女生'> 女生 </option>
													</select><p>
				<font class="font_7">生日：</font> <input type="text" name="year" size="5">年 
													<input type="text" name="month" size="5">月
													<input type="text" name="day" size="5">日<p>
				<font class="font_7">工作：</font> <input type="text" name="job" size="10"> <p>	
				<font class="font_7">E-mail：</font> <input type="text" name="mail" size="40"> <p>	
				<center>
					<input type="submit" value="修改" >
					<input type="reset" onclick="close_member_m()" value="關閉">
				</center>
			</form>
	</div>
</body>
</html>