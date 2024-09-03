<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            width: calc(100% - 22px);
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message, .error {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .message {
            background-color: #dff0d8;
            border: 1px solid #d0e9c6;
            color: #3c763d;
        }

        .error {
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            color: #a94442;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            //silahkan membuat codingan versi anda
            include "koneksi.php";

            if(isset($_POST["nama"]) && isset($_POST["umur"]) && isset($_POST["tlp"]) && isset($_FILES["upload"])){
                $nama = $_POST["nama"];
                $umur = $_POST["umur"];
                $telepon = $_POST["tlp"];
                $files = $_FILES["upload"];
                $query = "INSERT INTO mahasiswa 
                (nama_mahasiswa, umur, tlp, nama_file) 
                VALUES ('$nama', '$umur', '$telepon', '$files')";
                $iquery = mysqli_query($conn, $query);

                $destinationPath= "images/".$filename;
                if(move_uploaded_file($tmpPath,$destinationPath)){
                    echo "<br> Status: sukses upload";
                    echo '<br> <img src="'.$destinationPath.'" alt="upload img" width="100">';
                    $sql= "INSERT INTO images(path) VALUES ('".$destinationPath."')";
                    if(mysqli_query($connection,$sql)){
                        echo "insert database berhasil";
                        if(isset($_FILES["upload"]["nama"])){
                            $ukuran=($_FILES["upload"]["size"])/1024;
                            echo "Keterangan FIle: ";
                            echo "Upload: ".$_FILES["upload"]["name"]."<br>";
                            echo "Type: ".$_FILES["upload"]["type"]. "KB <br>";
                            echo "Size: ".$ukuran."<br>";
                            echo "Storage in: ".$_FILES["upload"]["tmp_name"]."<br>";
                        }else{
                            echo "data tida"
                        }
    }





            }
        }
        ?>
    </div>
</body>
</html>
