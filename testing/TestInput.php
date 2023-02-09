<?php 

require_once "../helper/Input.php";

$nama = input("Name");
echo "Hello $nama" . PHP_EOL;
$kerjaan = input("Pekerjaan");
echo $kerjaan . PHP_EOL;