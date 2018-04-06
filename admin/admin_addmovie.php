<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
include_once "../includes/connect.php";
$id=$_POST['id'];
$moviename=$_POST['moviename'];
$author=$_POST['author'];
$country=$_POST['country'];
$price=$_POST['price'];
$page=$_POST['page'];
$sql="insert into Bookinfo values(".$id.",'".$moviename.",".$author."',".$country.",".$price.",".$page."')";
if(mysql_query($sql))
    echo "successful";
else
    echo "Failure";
?>
</body>
</html>