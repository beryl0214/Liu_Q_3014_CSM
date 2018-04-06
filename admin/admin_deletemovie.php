<?php
require "../inclUdes/connect.php";
$moviename=$_POST['moviename'];
$result=mysql_query("select * from movie where moviename='".$moviename."';",$link);
$rownum=mysql_num_rows($result);
if($rownum==0)
	echo "do not have this movie";
else{
$sql="delete from movieinfo where moviename='".$moviename."';";
mysql_query($sql,$link);
	echo "deleted";}
?>