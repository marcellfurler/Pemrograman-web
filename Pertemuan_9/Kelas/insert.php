<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $databasename  ="php2";
    $conn = mysqli_connect($servername, $username, $password, $databasename) or die ("Sorry gezz, gagal koneksi ke database");

    <form action="" method="POST">
    nim: <input type="number" name="nim">
    </form>
?>
</table>