h1>all movies</h1>
<div>
    <?php
    require "../includes/connect.php";
    $sql="select * from movie";
    $result=mysql_query($sql,$link);
    echo"<table border=1>";
    echo"<tr>
			<td>name</td><td>author</td><td>country</td>
			</tr>";
    while($row=mysql_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[bookname]."</td>";
        echo "<td>".$row[author]."</td>";
        echo "<td>".$row[country]."</td>";
        echo "</tr>";
    }
    echo"</table>";

    echo "<a href='../adminpage.php'>bank to admin page</a>";
    ?>
</div>
