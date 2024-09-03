<?php
    setcookie("login_status", "", time() - 60, "/");
    header("location:login_cookies.php");

?>