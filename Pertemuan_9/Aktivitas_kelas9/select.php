<?php
    $servername = "127.0.0.1";
    $username="progweb";
    $password = "";
    $databasename = "php2";
    $conn = mysqli_connect($servername, $username, $password, $databasename) or die("Koneksi gagal");

    $sql = "SELECT * FROM mahasiswa";
    $hasil = mysqli_query( $conn , $sql); 


    if(mysqli_num_rows($hasil)>0){
        <table border=1>
            <thead>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </thead>
        </table>
    }else{
        echo "Tabel mahasiswa kosong";
    }



    // while($row= mysqli_fetch_assoc($hasil)){
    //     echo "<tr>";
    //     echo "<td>".$row['nim']."</td>";
    //     echo "<td>".$row['nama']."</td>";
    //     echo "<td>".$row['jeniskelamin']."</td>";
    //     echo "<td></td>";
    //     echo "</tr>";
    // }
?>