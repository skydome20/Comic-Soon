<link type="text/css" rel="stylesheet" href="basic_style.css"></link>
<meta charset='big5'></meta>

<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if($_COOKIE["visit"]==2){
	  //$vcount = $_COOKIE['visit'] + 1;
	  setcookie("visit", 3 , time()+3600);
	//  $_COOKIE['visit']=$_COOKIE['visit']+1;
}

if($_COOKIE["visit"]==1){
	if ($vote == 0){
	 $yes = $yes + 1;
	 }
	if ($vote == 1){
	 $no = $no + 1;
	 }
	 //$vcount = $_COOKIE['visit'] + 1;
	  setcookie("visit", 2 , time()+3600);
	// $_COOKIE['visit']=$_COOKIE['visit']+1;
}


//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<font size="5cm"id="poll_block">&nbsp���G</font>

<?php 
	  header("Content-Type:text/html; charset=big5");
	  if($_COOKIE["visit"]>=2) 
	  echo " <font color='red'>(�A���ѧ�L���o�I)</font><br>"; 
?>
<table >
<tr>
<td><font color='orange'>���w&nbsp&nbsp&nbsp</td>
<td>
<?php echo $yes; ?> ��(
<?php echo (100*round($yes/($no+$yes),2)); ?>%
)
</td>
</tr>
<tr>
<td><font color='orange'>�����w&nbsp&nbsp&nbsp</td>
<td>
<?php echo $no; ?> ��(
<?php echo(100*round($no/($no+$yes),2)); ?>%
)
</td>
</tr>
</table>
	
	
	
	
	
	
	
	