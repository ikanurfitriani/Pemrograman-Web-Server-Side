<?php
	function perkalian($kode, $nama, $harga, $jumlah) {
		$total = $harga*$jumlah;
		echo "Kode Barang : ".$kode."<br/>";
		echo "Nama Barang : ".$nama."<br/>";
		echo "Harga : Rp ".$harga."<br/>";
		echo "Jumlah Pembelian : ".$jumlah."<br/>";
		echo "Total Harga Yang Harus Dibayar : ".$total."<br/>";
	}
?>