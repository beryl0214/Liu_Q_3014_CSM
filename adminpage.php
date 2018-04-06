<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php  require "includes/connect.php"?>

<h1>admin<span><font size='5pt' color="red"> <?php echo $_SESSION['manager']; ?></font></span></h1>
<table >
    <tr><td><strong>manage movie</strong></td></tr>
    <tr>
        <td><a href="admin/addmovie.php">add movie</a></td>
        <td><a href="admin/deletemovie.php">delete movie</a></td>
        <td><a href="managebooks/showallmovie.php">all movies</a></td>

    </tr>
    <tr><td><br/></td></tr>
    <tr><td><strong>admin user</strong></td></tr>
    <tr>
        <td><a href="">add user</a></td>
        <td><a href="">delete user</a></td>
        <td><a href="admin/userinfo.php">user information</a></td>
    </tr>
    <tr><td><br/></td></tr>
    <tr><td><strong>manage information</strong></td></tr>
    <tr>
</table>
<br/><br/>

<a href='welcome.php'><button>log out</button></a>

</body>
</html>