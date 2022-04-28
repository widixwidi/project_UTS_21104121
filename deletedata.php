<?php
    
    include_once("koneksi2db.php");
    $isbn = "1111";
    $sql = "DELETE FROM daftar WHERE isbn='$isbn';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Proses Penghapusan Data Sukses<br>";
    }else{
        echo "Proses Penghapusan Data Sukses";
    }