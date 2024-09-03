<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama"><br><br>
        <label>Upload Foto</label><br>
        <input type="file" name="foto" id="file"><br><br>
        <label>Upload CV</label><br>
        <input type="file" name="cv" id="file"><br><br>
        <input type="submit" value="Upload Files">
    </form>


    <table border=1>
        <thead>
            <th>Nama Pemilik</th>
            <tr></tr>
            <th>File Foto</th>
            <th>
                <tr>
                    <th>Nama File</th>
                    <th>Ukuran</th>
                </tr>
            </th>

            <th>File CV</th>
            <!-- <th>
                <tr>
                    <th>Nama File</th>
                    <th>Ukuran</th>
                </tr>
            </th> -->
            


                

        </thead>
    </table>
</body>
</html>