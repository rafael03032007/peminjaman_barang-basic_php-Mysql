<?php
require_once('database.php');
$id = $_GET['id_barang'];
$data = delete('barang', $id);
if ($data) {
    header("location:barang.php");
}
?>