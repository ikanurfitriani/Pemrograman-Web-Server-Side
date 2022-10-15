<?php
require("proses.php");

$kode = $_POST["kode"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];

perkalian($kode, $nama, $harga, $jumlah);
?>