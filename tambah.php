<?php
require_once ("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_barang"];
    $kode_brg = $_POST["kode_barang"];
    $nama_brg = $_POST["nama_barang"];  
    $kategori = $_POST["kategori"];
    $merk = $_POST["merk"];
    $jumlah = $_POST["jumlah"];

    $result = tambahbarang($id, $kode_brg, $nama_brg, $kategori, $merk, $jumlah);
if($result){
    echo "<script> 'barang berhasil ditambahkan' </script>";
    header("location:barang.php"); 
} else {
    echo "<script> 'barang gagal ditambahkan' </script>";
    header("location:barang.php"); 
}

    echo $result;
}
?>