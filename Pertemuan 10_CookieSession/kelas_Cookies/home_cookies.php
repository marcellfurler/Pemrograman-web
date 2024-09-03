<?php

if(!isset($_COOKIE["login_status"]) || $_COOKIE["login_status"] != "true"){
    header("location:login_cookies.php");
    exit;
}

include("process_login.php");

$username = isset($_COOKIE["login_status"]) ? $_COOKIE["login_status"] : "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h2>Selamat datang di halaman home, <?php echo $username; ?></h2>
    <p><a href="logout_cookies.php"></a></p>
</body>
</html>