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

	<!---�����W��header--->
	<!--<div id="header_1"> </div>-->
	
	<!---�\�����header--->
	<div id="header_2">
		<!---����--->
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
				var d=new initArray("<font color=RED>�P����","<font color=white>�P���@","<font color=white>�P���G","<font color=white>�P���T","<font color=white>�P���|","<font color=white>�P����","<font color=red>�P����"); document.write("<font color=white>",today.getYear()+1900,"<font color=white>�~","<font color=white>",today.getMonth()+1,"<font color=white>��","<font color=white>",today.getDate(),"<font color=white>�� </FONT>"," ",timeValue);  //-->
			</script>
		</div>
		
		<!---�����s�����s--->
		<ul>
			<li>
				<a href="index.php">����</a><br>
			</li>
			<li>
				<a href="week.php" >�g�Z</a><br>
			</li>
			<li>
				<a href="month.php" >��Z</a><br>
			</li>
		</ul>
	</div>
	
	<!---���e--->
	<div id="content">
		<!---����\��C���e--->
		<div id="left_content">
			<ul>
				<li>
					<a href="javascript:show_login()">�|���n�J</a>
				</li>
				<li>
					<a href="javascript:show_reg()" >���U�|��</a>
				</li>
				<li>
					<a href="javascript:waring()" >�������</a>
				</li>
				<li>
					<a href="comic_show.php">���e��e</a>
				</li>
			</ul>
		</div>
		<!---�k�䤽�G�椺�e--->
		<div id="right_content">
			<center class="font_3">�̷s����</center>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=523&source=Bleach" target="_block">����:523<br></a>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=616&source=Naruto" target="_block">���v�Ԫ�:616<br></a>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=695&source=OnePiece" target="_block">�����:695<br></a>
			�E2013.1.17�@<img src="new.png"></img> <a id="font" href="show.php?No=41&source=Giant" target="_block">�i�������H:41<br></a>
			�E2013.1.10�@<img src="new.png"></img> <a id="font" href="show.php?No=390&source=Hayate" target="_block">�ۭ��ޮa:390<br></a>
			<br>
			<table width='500px' bgcolor='#aaaa66' rules='all' frame='box'>
			<tr><th colspan=2><center class='font_3'>���e������</center></tr>
			<tr><td ><center class='font_4'>���e�W��</center><td><center class='font_4'>�o����(�|�������έp)</center></tr>
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
			<center>�A���w�o�Ӻ�����?</center>
			<form>
			<font class="font_8">���w
			<input type="radio" name="vote" 
			value="0" onclick="getVote(this.value)">
			<br />
			<font class="font_8">�����w
			<input type="radio" name="vote" 
			value="1" onclick="getVote(this.value)">

			</form>
		</div>
	</div>
	
	
	<!---�n�J����--->

	<div id="login">
			<form  method="post" action="login.php">
				<center><font class="font_2" size="5">�|���n�J<p></font></center>
				<center><font class="font_1">�b���G</font> <input type="text" name="id" size="30"> <p></center>
				<center><font class="font_1">�K�X�G</font> <input type="password" name="pw" size="30"><p></center>
				<center>
					<input type="submit" value="�n�J">
					<input type="reset" onclick="close_login()" value="����">
				</center>
			</form>
	</div>
	
	<!---���U����--->
		<div id="reg" onreset ="close_reg()">
						<form  method="post" action="reg.php">
						<center>	<font class="font_2" size="5">�|�����U<p></font></center>
							<font class="font_1">*�b���G</font> <input class="input" type="text" name="id" size="30"> <p>
							<font class="font_1">*�K�X�G</font>  <input class="input"type="password" name="pw" size="30"><p>
							<font class="font_1">*�T�{�K�X�G</font>  <input class="input_1"type="password" name="pw2" size="30"><p>
							<font class="font_1">*E-mail�G</font>  <input class="input_2"type="text" name="mail" size="30"><p>
						<center>	<input type="submit" value="����"><input type="reset" onclick="close_login()" value="����"></center>
						
						</form>
				</div>
		</div>
	
</body>
</html>