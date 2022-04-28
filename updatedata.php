<?php

    include_once ("koneksi2db.php");
    $isbn = "1111";
    $nmbuku = "Bulan";
    $sql = "UPDATE daftar SET NAMA_BUKU='$nmbuku' WHERE ISBN='$isbn'";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Pembaruan Data Sukses<br>";
    }else{
        echo "Proses Pembaruan Data Sukses";
    }