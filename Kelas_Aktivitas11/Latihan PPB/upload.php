<?php

include "connection.php";

// if(isset($_POST["submit"])){
//     $nama = $_POST["nama"];

//     if(isset($_FILES["foto"]["nama"]["cv"])){
//         $file = $_FILES["foto"]["cv"];
//         $nama = $_FILES["nama"];
//         $foto = $_FILES["foto"] ["tmp_name"];
//         $cv = $_FILES["cv"]["tmp_nama"];
//         $query ="INSERT INTO latihan_upload_file (nama, foto, cv) VALUE ("$nama","$foto","$cv") ";
//         $iquery = mysqli_query($connection, $query);
//     }
// }


if(isset($_POST["nama"]) && isset($_FILES["foto"]) && isset($_FILES["cv"])) {
    $nama = $_POST["nama"];
    $foto = $_FILES["foto"]["tmp_name"];
    $cv = $_FILES["cv"]["tmp_name"];
    $query = "INSERT INTO latihan_upload_file (nama, foto, cv) VALUES ('$nama', '$foto', '$cv')";
    $iquery = mysqli_query($connection, $query);
    
    
    if(isset($_FILES["foto"]["name"])){
        $ukuran=($_FILES["foto"]["size"])/1024;
        echo "Hello $nama, berikut adalah Data Foto Anda <br>";
        echo "Nama: ".$_FILES["foto"]["name"]."<br>";
        echo "Tipe: ".$_FILES["foto"]["type"]."<br>";
        echo "Ukuran: ".$ukuran."<br>";
        echo "Lokasi: ".$_FILES["foto"]["tmp_name"]."<br>";
        echo "<br><br>";
    }if(isset($_FILES["cv"]["name"])){
        $ukuran=($_FILES["cv"]["size"])/1024;
        echo "Hello $nama, berikut adalah Data CV Anda <br>";
        echo "Nama: ".$_FILES["cv"]["name"]."<br>";
        echo "Tipe: ".$_FILES["cv"]["type"]."<br>";
        echo "Ukuran: ".$ukuran."<br>";
        echo "Lokasi: ".$_FILES["cv"]["tmp_name"]."<br>";
    }
}







// if(isset($_FILES["foto"]["name"])){
//     echo "Data Foto Anda <br>";
//     echo "Nama: ".$_FILES["foto"]["name"]."<br>";
//     echo "Tipe: ".$_FILES["foto"]["type"]."<br>";
//     echo "Ukuran: ".$_FILES["foto"]["size"]."<br>";
//     echo "Lokasi: ".$_FILES["foto"]["tmp_name"]."<br>";
//     echo "<br><br>";
// }if(isset($_FILES["cv"]["name"])){
//     echo "Data CV Anda <br>";
//     echo "Nama: ".$_FILES["cv"]["name"]."<br>";
//     echo "Tipe: ".$_FILES["cv"]["type"]."<br>";
//     echo "Ukuran: ".$_FILES["cv"]["size"]."<br>";
//     echo "Lokasi: ".$_FILES["cv"]["tmp_name"]."<br>";
// }

?>
