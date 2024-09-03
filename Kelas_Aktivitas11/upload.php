<?php

if(isset($_FILES["foto"]["name"])){
    echo "Data Foto Anda <br>";
    echo "Nama: ".$_FILES["foto"]["name"]."<br>";
    echo "Tipe: ".$_FILES["foto"]["type"]."<br>";
    echo "Ukuran: ".$_FILES["foto"]["size"]."<br>";
    echo "Lokasi: ".$_FILES["foto"]["tmp_name"]."<br>";
    echo "<br><br>";
}if(isset($_FILES["cv"]["name"])){
    echo "Data CV Anda <br>";
    echo "Nama: ".$_FILES["cv"]["name"]."<br>";
    echo "Tipe: ".$_FILES["cv"]["type"]."<br>";
    echo "Ukuran: ".$_FILES["cv"]["size"]."<br>";
    echo "Lokasi: ".$_FILES["cv"]["tmp_name"]."<br>";
}

?>
