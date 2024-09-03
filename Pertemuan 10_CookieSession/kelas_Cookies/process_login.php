<?php
// setcookie("cookie", "Marcell", time() +60, "/");
// echo "Data anda di simpan";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "user" && $password == "password"){
        setcookie("login_status", "true", time()+3600, "/");
        header("location: home_cookies.php");
        exit;
    }else{
        header("location: login_cookies.php?login_error=true");
        exit;
    }
}else{
    header("location: login_cookies.php");
    exit;
}

?>