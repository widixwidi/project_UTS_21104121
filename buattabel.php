<?php

include_once("koneksi2db.php");
$sql = "CREATE TABLE daftar(
    ISBN Integer(30) PRIMARY KEY,
    NAMA_BUKU Varchar(30),
    PENULIS Varchar(30),
    HARGA_BELI Integer(30)
);";

$hsl = mysqli_query($cnn,$sql);

if($hsl){
    echo "Pembuatan Tabel Sukses";
}else{
    echo "Pembuatan Tabel Gagal";
}
mysqli_close($cnn);