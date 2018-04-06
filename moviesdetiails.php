<?php
include_once "includes/connect.php";
    $name=$_POST['name'];
	$author=$_POST['author'];
	$country=$_POST['country'];
//	if(isset($name) and !isset( $author))
		$sql="select * from movie where moviename like '%".$name."%' and author like '%".$author."%' and publisher like '%".$country."%' ;";
	$result=mysql_query($sql,$link);
	$num_rows=mysql_num_rows($result);
	if($num_rows==0)
	{
		echo "no movie";
	}
	else{
	echo"<table border=1>";
	echo"<tr>
			<td>moviename</td><td>author</td><td>country</td>
			</tr>";
		while($row=mysql_fetch_array($result))
		{
            echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['moviesname']}\">
				<a href=\"index.php\">Back...</a>";
			echo "<tr>";
			echo "<td>".$row[moviename]."</td>";
			echo "<td>".$row[author]."</td>";
			echo "<td>".$row[country]."</td>";
			echo "</tr>";
		}
	echo"</table>";
	}
?>
</div>
