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
		
	
		<!---���e�Ϥ����--->
			<?php
				
				$source=$_GET['source'];//���e�W��
				echo " 
						<img id='picture' title='".$source."' src=comic/".$source."/logo.jpg></image> 
						<br>
					 ";
			?>
		<!---���e�e�ƥ����--->
			<div id="all">
				<?php
					for($i=1;$i<=1000;$i++){
						$comic = "comic/".$source."/".$i;
						if(file_exists($comic))
						echo"<a href='show.php?No=".$i."&source=".$source."' id='number' target='_block'>��".$i."��</a>";
						else ;
					}
				?>
			</div>
			
			<center><a href="comic_show.php" class="font_5">��^���e��e</a></center>
		
	</div>
</body>
</html>