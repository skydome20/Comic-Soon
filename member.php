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
				<a href="member.php">����</a><br>
			</li>
			<li>
				<a href="week_member.php" >�g�Z</a><br>
			</li>
			<li>
				<a href="month_member.php" >��Z</a><br>
			</li>
		</ul>
	</div>
	
	<!---���e--->
	<div id="content">
		<!---����\��C���e--->
		<div id="left_content">
			<ul>
				<li>
					<a href="javascript:show_member()">�|�����</a>
				</li>
				<li>
					<a href="javascript:show_member_m()">�ק���</a>
				</li>
				<li>
					<a href="comic_show_member.php">���e��e</a>
				</li>
				<li>
					<a href="post.php?source=Onepiece" >�������</a>
				</li>
				<li>
					<a href="logout.php">�n�X</a>
				</li>
			</ul>
		</div>
		<!---�k�䤽�G�椺�e--->
		<div id="right_content">
			<!---�̷s����--->
			<center class="font_3">�̷s����</center>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=523&source=Bleach" target="_block">����:523<br></a>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=616&source=Naruto" target="_block">���v�Ԫ�:616<br></a>
			�E2013.1.18�@<img src="new.png"></img> <a id="font" href="show.php?No=695&source=OnePiece" target="_block">�����:695<br></a>
			�E2013.1.17�@<img src="new.png"></img> <a id="font" href="show.php?No=41&source=Giant" target="_block">�i�������H:41<br></a>
			�E2013.1.10�@<img src="new.png"></img> <a id="font" href="show.php?No=390&source=Hayate" target="_block">�ۭ��ޮa:390<br></a>
			<br>
			<!---���e������--->
			<table width="500px" bgcolor='#aaaa66' rules="all" frame="box">
			<tr><th colspan=2><center class="font_3">���e������</center></tr>
			<tr><td ><center class="font_4">���e�W��</center><td><center class="font_4">�o����(�|�������έp)</center></tr>
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
	<!---�|����Ƶ���--->
	
	<div id="data">

				<center><font class="font_5" >�|����T<p></font></center>
				<font class="font_7">�b���G</font> <?php echo $_SESSION['username'] ?><p>
				<font class="font_7">�m�W�G</font> <?php echo $rows['name'] ?><p>
				<font class="font_7">�ʧO�G</font>  <?php echo $rows['sex'] ?><p>
				<font class="font_7">�ͤ�G</font> <?php echo $rows['birth_year'] ?>�~ <?php echo $rows['birth_month'] ?>��<?php echo $rows['birth_day'] ?>��<p>
				<font class="font_7">�u�@�G</font> <?php echo $rows['job'] ?> <p>	
				<font class="font_7">E-mail�G</font> <?php echo $rows['email'] ?> <p>
				<center><input type="reset" onclick="close_member()" value="����"></center>
	</div>

	<div id="data_m" >
			<form  method="post" action="modify_member.php">
				<center><font class="font_5" >��T�s�W/�ק�<p></font></center>
				<font class="font_7">�m�W�G</font> <input type="text" name="name" size="20"> <p>
				<font class="font_7">�ʧO�G</font>  <select name='sex'>
													<option value='�k��'> �k�� </option>
													<option value='�k��'> �k�� </option>
													</select><p>
				<font class="font_7">�ͤ�G</font> <input type="text" name="year" size="5">�~ 
													<input type="text" name="month" size="5">��
													<input type="text" name="day" size="5">��<p>
				<font class="font_7">�u�@�G</font> <input type="text" name="job" size="10"> <p>	
				<font class="font_7">E-mail�G</font> <input type="text" name="mail" size="40"> <p>	
				<center>
					<input type="submit" value="�ק�" >
					<input type="reset" onclick="close_member_m()" value="����">
				</center>
			</form>
	</div>
</body>
</html>