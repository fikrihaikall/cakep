<?php

// die('aaaa');
// var_dump($_POST);die();
include '../conn.php';

$nama_barang = $_POST['nama_barang'];
$harga_barang = str_replace('.', '', $_POST['harga_barang']);
$keterangan = $_POST['keterangan'];

// getMahasiswa();

$sql = "UPDATE lap_keuangan SET 
            NAMA_BARANG = '{$_POST['nama_barang']}',
            HARGA_BARANG = '{$harga_barang}',
            KETERANGAN = '{$_POST['keterangan']}'
         WHERE
            ID = '{$_POST['id']}'";

// var_dump($sql);die();
try {
   $result = $conn->query($sql);
   return $result;
} catch (\Throwable $th) {
   //throw $th;
   die('edit error');
}