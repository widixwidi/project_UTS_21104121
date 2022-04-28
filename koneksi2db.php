<?php
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT) or die("Koneksi ke DBMS Mysql gagal<br>");
    echo "Koneksi ke DBMS Mysql Sukses<br>";