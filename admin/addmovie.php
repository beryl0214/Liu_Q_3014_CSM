<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>add movie</h1>
<form action="addmovies.php" method="post">
    *movie ID：<input type="text" name="id"><br/>
    *movie name ：<input type="text" name="moviename"><br/>
    *author  ：<input type="text" name="author"><br/>
    * country：<input type="radio" name="country" value="0" >
    price：<input type="text" name="price"><br/>
    page：<input type="text" name="page"><br/>
    <input type="submit" value="add">
</form>
<?php
if(isset($_POST['id']))
{
    require "admin_addmovie.php";
    echo "<a href='showallmoviez.php'>check all movie</a>";
}
?>
</body>
</html>
