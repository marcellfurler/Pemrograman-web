<?php
    include "koneksi.php";
    if ($_GET) {
        $sql = "SELECT * FROM mahasiswa WHERE id = {$_GET['id']}";
        $hasil = mysqli_query($conn,$sql);
        if  (mysqli_num_rows($hasil)>0){
            $row = mysqli_fetch_assoc( $hasil );
            $oldNim = $row["nim"];
            $oldNama = $row["nama"];
            $oldJenis_kelamin = $row["jenis_kelamin"];
    } else {
        echo "Data yang diedit tidak ada";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
    <h1 class="text-center m-3 text-black">Edit Data</h1>
   
   <form action="update.php" method="post" class="row justify-content-center m-3">

   <table>
        <input type="hidden" name="id" value="<?php if ($_GET['id']!= "") {
            echo $_GET[ 'id' ];
        } else {
            echo "";}?>">
        <tr>
            <td>Nim : </td>
            <td><input type="number" name="nim" value="<?php if ($_GET['id']!= "") {echo $oldNim;} ?>">
            </td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" value="<?php if ($_GET['id']!= "") {echo $oldNama;} ?>">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" <?php echo ($oldJenis_kelamin == 'L') ? 'checked':''; ?>> L
                <input type="radio" name="jenis_kelamin" value="P" <?php echo ($oldJenis_kelamin == 'P') ? 'checked':''; ?>> P
            </td>
        </tr>
   </table>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Edit</button>
            <a href="read.php" class="btn btn-secondary">Back</a>
        </div>
   </form>

   <?php
        if ($_POST) {
            $newId = $_POST['id'];
            $Nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $sql = "UPDATE mahasiswa SET nim = '$Nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin' WHERE id = '$newId'";
            if(mysqli_query($conn,$sql)) {
                echo '<h3> Berhasil Update Data </h3>';
                header("Location: read.php");
            } else {
                echo '<h3> Gagal Update Data </h3>';
                echo mysqli_error($conn);
            }
        }
    ?>

</body>
</html>