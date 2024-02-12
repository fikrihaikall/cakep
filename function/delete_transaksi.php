<?php

// die('aaaa');
// var_dump($_POST);die();
include '../conn.php';

// getMahasiswa();

$sql = "DELETE FROM lap_keuangan WHERE ID = '{$_POST['id']}'";

// var_dump($sql);die();
try {
   $result = $conn->query($sql);
   return $result;
} catch (\Throwable $th) {
   //throw $th;
   die('edit error');
}