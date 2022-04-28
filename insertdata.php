<?php
    include_once ("koneksi2db.php");
    $isbn ="1111";
    $nmbuku = "Selena";
    $penulis = "Tere Liye";
    $harga = "100000";


    $sql = "INSERT INTO daftar(ISBN,NAMA_BUKU,PENULIS,HARGA_BELI) Values('$isbn','$nmbuku','$penulis','$harga');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel stok Berhasil<br>";
    }else{
        echo "inser Data Pada Tabel stok Gagal<br>";
    }
