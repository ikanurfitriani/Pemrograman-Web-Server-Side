<?php
$a = $_POST["a"];
$b = $_POST["b"];

	function jumlah($a, $b) {
		$hasil = $a+$b;
		echo "Hasil Penjumlahan ".$a." + ".$b." = ".$hasil."<br/>";
	}
	jumlah($a, $b);
?>