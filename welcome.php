<?php
session_start();
if(!isset($_SESSION["username"])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    echo"<h1>Selamat Datang ". $_SESSION["username"]."</h1>"
    ?>
    <h1>Berhasil Login</h1>
    <a href="lougout.php">Logout</a>
</body>
</html>
