<?php
    // kode anda
    include "koneksi.php";
    if ($_GET){
        $sql = "SELECT * FROM stockBarang WHERE idBarang = {$_GET['id']}";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $oldNamaBarang = $row["namaBarang"];
            $oldStock = $row["stok"];
            $oldHarga = $row["harga"];
            $oldPromo = $row["promo"];
        } else{
            echo "Data yang akan di edit tidak ada.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
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
    <h1 class="text-center m-3 text-black">Edit Barang</h1>
   
   <form action="edit.php" method="post" class="row justify-content-center m-3">

   <table>
        <input type="hidden" name="idBarang" value="<?php if ($_GET['id'] !=""){echo$_GET['id'];}
        else{echo"";} ?>">
        <tr>
            <td>Nama Barang : </td>
            <td><input type="text" name="namaBarang" max="30" value="<?php if ($_GET['id'] !=""){echo $oldNamaBarang;} ?>"></td>
        </tr>
        <tr>
            <td>Jumlah Barang : </td>
            <td><input type="number" name="jumlahBarang" value="<?php if ($_GET['id'] !=""){echo $oldStock;} ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang : </td>
            <td><input type="text" name="hargaBarang" value="<?php if ($_GET['id'] !=""){echo $oldHarga;} ?>"></td>
        </tr>
        <tr>
            <td>Promo : </td>
            <td>
                <input type="radio" name="promo" value="Y" <?php echo($oldPromo == 'Y') ?'checked':''; ?>> Y
                <input type="radio" name="promo" value="N" <?php echo($oldPromo == 'N') ?'checked':''; ?>> N
            </td>
        </tr> 
   </table>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Edit</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </div>
   </form>

   <?php
        if($_POST){
            $newId = $_POST['idBarang'];
            $barang = $_POST['namaBarang'];
            $stok = $_POST['jumlahBarang'];
            $harga = $_POST['hargaBarang'];
            $promo = $_POST['promo'];
            $sql = "UPDATE stockBarang SET namaBarang='".$barang."', stok='".$stok."', harga='".$harga."', promo='".$promo."'WHERE idBarang='".$newId."'";
            if(!mysqli_query($conn,$sql)){
                echo'"<h3> Gagal Update Data</h3>"';
                echo mysqli_error($conn);
            }else{
                // echo'"<h3>Berhasil Update Data</h3>"';
                header("Location: index.php");
            }
        }
    ?>