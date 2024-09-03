<!-- phpnya -->

<?php
if(!empty($_POST["login"])){
    if($_POST["Username"] == "marcell" AND $_POST["Password"] == "marcell"){
        session_start();
        $_SESSION["Username"] = "Marcell Furler";
        header("location:home.php");
    }else{
        echo "User dan atau password anda salah <br>";
        echo "<a href='logout_sesi.php'>kembali</a>";
    }
}
?>
<!-- htmlnya -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form method="post" action="Login.php">
            <table>

                <tr>
                    <td>username</td>
                    <td> : </td>
                    <td><input type="text" name="Username"></td>
                </tr>

                <tr>
                    <td>password</td>
                    <td> : </td>
                    <td><input type="password" name="Password"></td>
                </tr>
            </table><br>
            <input type="submit" name="login" value="login">
        </form>
    </div>

</body>
</html>
