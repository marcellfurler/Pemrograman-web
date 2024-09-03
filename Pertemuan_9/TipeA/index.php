<?php
    // kode anda
    include "koneksi.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Stok Bakery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- Gausah diowah-owah -->
    <style>

        body {
            background-image: url("images/bg.png");
            background-position: center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        table {
            border: 2px black solid;
            border-collapse: collapse;
        }

        table * {
            padding: 4px;
        }

    </style>

</head>
<body>
    <h1 class="text-center m-3 text-black font-weight-bold">Data Stok Bakery</h1>

    <div class="row justify-content-center m-3">
        <a class="btn btn-primary" href="formBarang.php">Tambah Barang</a>
    </div>

    <!-- Bikin tabel -->
    <?php
        // kode anda
        $sql = "SELECT * FROM stockBarang";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){

        
    ?>
        <div class="row justify-content-center m-3">
            <table border="1" class="table table-striped table-light">
                <thead class="thead-dark">
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga</th>
                    <th>Potongan</th>
                    <th colspan="2">Pengaturan</th>
                </thead>
                
            <?php
                // kode anda
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["idBarang"];
                    echo "<tr>";
                    echo "<td>".$row["namaBarang"]."</td>";
                    echo "<td>".$row["stok"]."</td>";
                    echo "<td>".$row["harga"]."</td>";
                    if($row["promo"]=="Y"){
                        $harga = $row["harga"] * 0.1;
                        echo "<td>".$harga."</td>";
                    }else{
                        echo "<td>-</td>";
                    }
                    echo "<td><a class='btn btn-info' href = 'edit.php?id=$id'>Edit</a></td>";
                    echo "<td><a class='btn btn-danger' href = 'delete.php?id=$id'>Hapus</a></td>";
                
                    echo  "</tr>";
                }
                
            
            ?>
                
            </table>
        </div>

    <?php
        // kode anda

        }else{
            echo "Data Kosong";
        }
    ?>

</body>
</html>