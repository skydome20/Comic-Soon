<!DOCTYPE html>
<?php session_start(); ?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="big5"></meta>
	<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
	<link type="text/css" rel="stylesheet" href="week.css"></link>
	<script language="javascript" src="basic_style.js"></script>
	
	
	<title>week_comic</title>
</head>

<body>

	<!---�����W��header--->
	
	
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
			<!---���e--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Fullmetal">�����Ҫ��N�v</th>
					   <td align="center"><a id="number_name" href="show.php?No=106&source=Fullmetal"  target="_block">106</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=107&source=Fullmetal"  target="_block">107</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=108&source=Fullmetal"  target="_block">108</a></td>
					 </tr>
				</table>
			</div>
			<!---���e--->
			<div id="week_list">
				<table style="border: 5px groove rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 800px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
					 <tr>
					   <th align="center"><a id="comic_name" href="comic_all.php?source=Giant">�i�������H</th>
					   <td align="center"><a id="number_name" href="show.php?No=39&source=Giant"  target="_block">039</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=40&source=Giant"  target="_block">040</a></td>
					   <td align="center"><a id="number_name" href="show.php?No=41&source=Giant"  target="_block">041</a></td>
					 </tr>
				</table>
			</div>

			
	</div>

</body>
</html>