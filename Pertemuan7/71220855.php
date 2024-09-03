<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p{
            
        }
    </style>
</head>
<body>

    <h1>belajar PHP</h1>

    <?php

        echo "Hello guys, I'm Australian. I Love you, keep going <br>";
        "<br>";
        echo "Hello World <br>";
        echo "<style>p {color:blue}</style> <br>";

        $nama = "Marcell";

        echo "Hello {$nama}, Your are so strong <br>" ;


        function siswa(){
            $name = "John";
            $nim = 71220855;
            echo "Hello {$name}, kamu memiliki NIM {$nim} <br>";
    
        }
    
        siswa();


        $hobi = array("makan", "bernyanyi", "tidur", "sleeping") ;



        // untuk menghitung banyak dari huruf pada satu kata
        var_dump($hobi);
        echo "<br><br>";

        // untuk print urutan listnya dari 0
        print_r($hobi); 
        echo "<br>";


        // untuk konstanta
        define ("phi", 3.14);
        echo phi*5;

        echo "<br>";



        if(phi == 3.14){
            echo "true";
        }else if  (phi > 3.14){
            echo "greater guys";
        }else{
            echo "sorry, that was little";
        };


        switch(phi){
            case phi == 3.14:
                echo "True";
                break;
            case (phi > 3.14):
                echo "greater guys bro";
                break;
            case (phi<3.14):
                echo "lol, that was not enough";
                break;
        }

        


    ?>

    <p>
        
    </p>


    

    
    

</body>
</html>