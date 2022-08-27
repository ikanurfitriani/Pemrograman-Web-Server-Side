<?php
$mahasiswasaya = [
	['nama' => 'Susanti',
	'alamat' => 'Jakarta',
	'tanggal_lahir' => '5 Juni 1999',
	'umur' => 23],
	['nama' => 'Juniar',
	'alamat' => 'Yogyakarta',
	'tanggal_lahir' => '21 Februari 1998',
	'umur' => 24],
];
// menampilkan array dengan looping foreach
foreach($mahasiswasaya as $cetak_mhs) {
	echo "<h2>DATA MAHASISWA:</h2>";
	echo "<p>Nama: ".$cetak_mhs["nama"]."</h2>";
	echo "<p>Alamat: ".$cetak_mhs["alamat"]."<p>";
	echo "<p>Tanggal Lahir: ".$cetak_mhs["tanggal_lahir"]."<p>";
	echo "<p>Umur: ".$cetak_mhs["umur"]."<p>";
	echo "<hr>";
}
?>