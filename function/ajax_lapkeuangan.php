<?php

// die('aaaa');
include '../conn.php';

// getMahasiswa();
$sql = "select * from lap_keuangan";
$result = $conn->query($sql);
if ($result) {
   $data = [];
   while ($row = $result->fetch_assoc()) {
      $data[] = $row;
   }
   // echo json_encode(['data' => $data]);
   echo json_encode($data);
}
// echo $data;
// foreach ($result->fetch_assoc() as $k => $v) {
//    var_dump($v);
// }
// die();