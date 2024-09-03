<?php
    // kode anda
    include "koneksi.php";
    if ($_GET){
        $sql= "DELETE FROM stockBarang WHERE idBarang = {$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Data berhasil dihapus";
        } else{
            echo "Data yang akan diedit tidak ada.";
        }
    }

?>

<!-- crud -> create, read, update, delete -->