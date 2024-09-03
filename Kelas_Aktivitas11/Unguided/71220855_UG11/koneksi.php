<?php
   //KONEKSI
   $servername="localhost";
   $username="root";
   $password="";
   $databasename="pertemuan11_php4"; //sesuaikan dengan database anda
   $conn= mysqli_connect($servername,$username,$password,$databasename) or die("Koneksi gagal");
   echo $password;
?>