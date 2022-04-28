<?php
    if(isset($_POST['txISBN'])){
    include_once ("koneksi2db.php");
    $isbn =$_POST['txISBN'];
    $nmbuku =$_POST['txNMBUKU'];
    $penulis = $_POST["txPENULIS"];
    $harga = $_POST["txHARGA"];

    $sql = "INSERT INTO daftar(ISBN,NAMA_BUKU,PENULIS,HARGA_BELI) Values('$isbn','$nmbuku','$penulis','$harga');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Pada Tabel Stok Berhasil<br>";
    }else{
        echo "Insert Data Pada Tabel Stok Gagal<br>";
    }
}else{
    header("location : insertdatastok.php");
}

