<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <php
        $table=[]



        ?>





</body>
</html> -->

<php
    $table=[]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $table = [
            [
                "nama_depan" => "Marcell",
                "nama_belakang" => "Furler",
                "NIM"  => "71220855",
                "email" => "marcell.furler@.com"
                ],

                [
                "nama_depan" => "Sia",
                "nama_belakang" => "Kate",
                "NIM"  => "71220856",
                "email" => "sia.kate@.com" 
                ],
                [
                "nama_depan" => "Jessie",
                "nama_belakang" => "J",
                "NIM"  => "71220857",
                "email" => "jessie.kate@.com" 
                ],
                [
                "nama_depan" => "Meghan",
                "nama_belakang" => "Trainor",
                "NIM"  => "71220858",
                "email" => "meghan.kate@.com" 
                ]

            ];

        

        for($i = 0; $i <tr count($table) ; $i++){
            echo "<tr>";
            foreach($table[$i] as $key_value => $value){
                echo $value
            };
            echo "</tr>";
        };

        
    
    ?>





    <h1>Table Dinamis</h1>
    <table border="1">
        <th>Nama depan</th>
        <th>Nama belakang</th>
        <th>Nama NIM</th>
        <th>Nama email</th>
    </table>
</body>
</html>