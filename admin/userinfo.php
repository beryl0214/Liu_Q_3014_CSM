<?php
require "../includes/connect.php";
$select=$_POST['submit'];
$typeid=0;
if($select=="conform")
{
    $readername=$_POST['username'];
    $sql="select * from users where name='".$username."';";
}
elseif($select=="check information")
{
    $sql="select * from user;";
}
else
{
    $sql="select * from admininfo;";
    $typeid=1;

}
$result=mysql_query($sql,$link);
$num=mysql_num_rows($result);
if($num==0)
{
    echo "unknow user";
}
else{
    echo "<table border='1'>";
    if($typeid==0)
    {
        echo "<tr>";
        echo "<td>userid</td><td>name</td><td>sex</td><td>vocation</td><td>tel</td><td>email</td><td>remark</td>";
        echo "</tr>";
        while($row=mysql_fetch_array($result))
        {
            echo  "<tr>";
            echo  "<td>".$row[id]."</td>";
            echo  "<td>".$row[name]."</td>";
            echo  "<td>".$row[sex]."</td>";
            echo  "<td>".$row[vocation]."</td>";
            echo  "<td>".$row[tel]."</td>";
            echo  "<td>".$row[email]."</td>";
            echo  "<td>".$row[remark]."</td>";
            echo "</tr>";
        }
    }//if
    else
    {
        echo "<tr>";
        echo "<td>adminid</td><td>name</td><td>sex</td><td>tel</td><td>email</td><td>remark</td>";
        echo "</tr>";
        while($row=mysql_fetch_array($result))
        {
            echo  "<tr>";
            echo  "<td>".$row[id]."</td>";
            echo  "<td>".$row[name]."</td>";
            echo  "<td>".$row[sex]."</td>";
            echo  "<td>".$row[tel]."</td>";
            echo  "<td>".$row[email]."</td>";
            echo  "<td>".$row[remark]."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>