<?php
    include_once("konfigurasi.php");
    
$cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD) or die("Terjadi Kesalahan saat Melakukan Koneksi ke Database");

echo "Koneksi Sukses<br>";

?>