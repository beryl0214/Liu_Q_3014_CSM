<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>delete movie</h1>
<form action="deletemovie.php" method="post">
    movie name want delete : <input type="text" name="moviename">
    <input type="submit" value="delete">
</form>
<?php
if(isset($_POST['moviename']))
    require "admindelete.php";
?>
</body>
</html>