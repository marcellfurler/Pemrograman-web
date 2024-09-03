<?php
session_start();

?>

<html>
    <head>
        <title>Home Latihan Cookies</title>
    </head>

    <body>
        <span>Hallo kamu adalah <?php echo $_SESSION['Username']; ?> </span>
        <br><br>
        <a href="logout_sesi.php">Logout</a>
    </body>
</html>