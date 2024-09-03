<?php
if(!empty($_POST["login"])){
    if($_POST["Username"] == "marcell" AND $_POST["Password"] == "marcell"){
        session_start();
        $_SESSION["Username"] ="Marcell Furler";
        header("location:home.php");
    }else{
        echo "User dan atau password anda salah <br>";
        echo "<a href='logout_sesi.php'>kembali</a>";
    }
}
?>