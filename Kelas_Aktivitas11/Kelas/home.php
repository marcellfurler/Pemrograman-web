<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "pertemuan11_php4";

$connection = mysqli_connect($hostname, $username,  $password, $database) or die ("Koneksi Gagal"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM images";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<img src='".$row["path"].'" alt="upload" width="200">';
        }
    ?>
</body>
</html>