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
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="">File nama : </label><br>
        <input type="file" name="file" id="file"><br>
        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    
</body>
</html>




<?php

if(isset($_FILES["upload"]["name"])){ 
    $filename= $_FILES["upload"] ["name"];
    $filetype= $_FILES["upload"] ["type"];
    $size=$_FILES["upload"] ["size"];
    $tmpPath=$_FILES['upload'] ["tmp_name"];
    
    // $extFile= explode("/", $filetype);
    // $extFile= $extFile[1];
    $extFile= explode(".", $filename);
    $extFile= $extFile[1];

    $maxsize=2000000;
    
    if($size>$maxsize){
        echo "file lebih dari 2 mb";
    }else {
        if ($extFile =="jpeg" || $extFile == "jpg"){
    echo "keterangan file: <br>";
    echo "upload: $filename <br>";
    echo "type: $filetype <br>";
    echo "size: $size <br> byte";
    echo "stored in: $tmpPath <br>";
    

    

    $destinationPath= "images/".$filename;
    if(move_uploaded_file($tmpPath,$destinationPath)){
        echo "<br> Status: sukses upload";
        echo '<br> <img src="'.$destinationPath.'" alt="upload img" width="100">';
        $sql= "INSERT INTO images(path) VALUES ('".$destinationPath."')";
        if(mysqli_query($connection,$sql)){
            echo "insert database berhasil";
        }
    }else{
        echo"<br>gagal upload";
    }
}else{
    echo "file belum upload";
}
}
}

?>