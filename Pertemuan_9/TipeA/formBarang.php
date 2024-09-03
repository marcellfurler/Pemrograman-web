<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
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
        body{
            background-image: url("images/bg.png");
            background-position: center;
            background-size: cover;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            margin-bottom: 20px; 
        }

        .form-group {
            margin-bottom: 10px;
        }
    </style>

</head>
<body>
    <h1 class="row justify-content-center m-3 text-black">Tambah Barang</h1>
    <form action="formBarang.php" method="post" class="row justify-content-center m-3">

    <table>
            <tr>
                <td>Nama Barang : </td>
                <td><input type="text" name="namaBarang" max="30"></td>
            </tr>
            <tr>
                <td>Jumlah Barang : </td>
                <td><input type="number" name="jumlahBarang"></td>
            </tr>
            <tr>
                <td>Harga Barang : </td>
                <td><input type="text" name="hargaBarang"></td>
            </tr>
            <tr>
                <td>Promo : </td>
                <td>
                    <input type="radio" name="promo" value="Y"> Y
                    <input type="radio" name="promo" value="N"> N
                </td>
            </tr> 
    </table>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </div>
    </form>

    <?php
        include "koneksi.php";

        if ($_POST){
            $sql = "INSERT INTO stockBarang(namaBarang, stok, harga, promo) VALUES ('{$_POST['namaBarang']}', '{$_POST['jumlahBarang']}', '{$_POST['hargaBarang']}', '{$_POST['promo']}')";

            if (mysqli_query($conn, $sql)){
                echo "<h3>Berhasil tambah data</h3>";

            }else{
                echo "<h3>Gagal tambah data</h3>";
            }
        }
    ?>

</body>
</html>