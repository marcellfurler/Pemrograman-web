<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $databasename  ="php2";
    $conn = mysqli_connect($servername, $username, $password, $databasename) or die ("Sorry gezz, gagal koneksi ke database");

    $sql = "SELECT * FROM mahasiswa";
    $hasil = mysqli_query($conn, $sql);
    var_dump($hasil);

    if(mysqli_num_rows($hasil)>0){
        ?>
        <table border=1>
            <thead>
                <!-- <th>ID</th> -->
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </thead>
        
        <?php
    }else{
        echo "Tabel mahasiswa kosong" ;      
    }


    while($row= mysqli_fetch_assoc($hasil)){
        echo "<tr>";
        echo "<td>".$row['nim']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['jenis_kelamin']."</td>";
        echo "<td></td>";
        echo "</tr>";
    }
?>
</table>