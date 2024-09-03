<?php 
    //silahkan membuat codingan versi anda
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe B</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: auto; 
            margin: 0; 
            background-color: lightgrey;
        }

        table {
            border-collapse: collapse;
            width: 80%; 
            padding: 16px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: blue;
            color: white
        }

        ol{
            list-style-type:none;
        }

        a{
            text-decoration: none;
        }

        h1{
            padding: 16px;
            margin: 16px;
        }
        
    </style>
</head>
<body>
    <h1>Berkas Mahasiswa Informatika</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>Umur</th>
                <th>No HP</th>
                <th>Judul File</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    //silahkan membuat codingan versi anda
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);
    
    $nomor_urut = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        $nama_mahasiswa = $row['nama_mahasiswa'];
        $umur =$row['umur'];
        $telepon =$row['tlp'];
        $files = $row['nama_file'];
        echo "<tr>";
        echo "<td>" . $nomor_urut . "</td>";
        echo "<td>" . $nama_mahasiswa. "</td>";
        echo "<td>" . $umur . "</td>";
        echo "<td>" . $telepon . "</td>";
        echo "<td>" . $files . "</td>";
        echo "</tr>";
        $nomor_urut++;
    }
    
    mysqli_close($conn);
    ?>

        </tbody>
    </table>
</body>
</html>
