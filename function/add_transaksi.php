<?php

// die('aaaa');
include '../conn.php';

$nama_barang = $_POST['nama_barang'];
$harga_barang = str_replace('.', '', $_POST['harga_barang']);
$keterangan = $_POST['keterangan'];
// var_dump($harga_barang);die();
// getMahasiswa();
$sql = "INSERT INTO `lap_keuangan`( `NAMA_BARANG`, `HARGA_BARANG`, `KETERANGAN`) 
   VALUES ('{$nama_barang}','{$harga_barang}','{$keterangan}')";

try {
   $result = $conn->query($sql);
   return $result;
} catch (\Throwable $th) {
   //throw $th;
   die('add error');
}