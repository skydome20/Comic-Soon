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
	
		<?php
			echo"
				
				<a id='show' href='comic_all.php?source=OnePiece'><img id='comic' title ='�����'         src=comic/all/1.jpg></image></a>
				<a id='show' href='comic_all.php?source=Naruto'><img id='comic' title ='���v�Ԫ�'         src=comic/all/2.jpg></image></a>
				<a id='show' href='comic_all.php?source=Kuroko'><img id='comic' title ='�v�l�x�y��'       src=comic/all/3.jpg></image></a>
				<a id='show' href='comic_all.php?source=Gintama'><img id='comic' title ='�Ȼ�'            src=comic/all/4.jpg></image></a>
				<a id='show' href='comic_all.php?source=Reborn'><img id='comic' title ='�a�x�Юv'         src=comic/all/5.jpg></image></a>
				<a id='show' href='comic_all.php?source=Bleach'><img id='comic' title ='����'             src=comic/all/6.jpg></image></a>
				<a id='show' href='comic_all.php?source=Hayate'><img id='comic' title ='�ۭ��ޮa'         src=comic/all/7.jpg></image></a>
				<a id='show' href='comic_all.php?source=FairyTale'><img id='comic' title ='�]�ɤ֦~'      src=comic/all/8.jpg></image></a>
				<a id='show' href='comic_all.php?source=Fullmetal'><img id='comic' title ='�����Ҫ��N�v'  src=comic/all/9.jpg></image></a>
				<a id='show' href='comic_all.php?source=Giant'><img id='comic' title ='�i�������H'    	  src=comic/all/10.jpg></image></a>
				";
		?>
		<br>
		<center><a href="index.php" class="font_5">��^����</a></center>
	</div>
</body>
</html>