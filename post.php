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
					<a href="post.php?source=Onepiece">�����</a>
				</li>
				<li>
					<a href="post.php?source=Naruto">���v�Ԫ�</a>
				</li>
				<li>
					<a href="post.php?source=Hayate">�ۭ��ޮa</a>
				</li>
				<li>
					<a href="post.php?source=Reborn">�a�x�Юv</a>
				</li>
				<li>
					<a href="post.php?source=Kuroko">�¤l���x�y</a>
				</li>
				<li>
					<a href="post.php?source=Gintama">�Ȼ�</a>
				</li>
				<li>
					<a href="post.php?source=FairyTale">�]�ɤ֦~</a>
				</li>
				<li>
					<a href="post.php?source=Bleach">����</a>
				</li>
				<li>
					<a href="post.php?source=Giant">�i�������H</a>
				</li>
				<li>
				<a href="post.php?source=Fullmetal">���Ҫ��N�v</a>
				</li>
			</ul>
		</div>
		<!---�k�䤽�G�椺�e--->
		<div id="right_content_post">
			<?php
				
				$source=$_GET['source'];//���e�W��
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







