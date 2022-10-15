<?php
class hewan {
	var $nama;
	function __construct() {
		echo "Ini adalah kelas khusus Hewan <br/>";
	}
	function setx($nama){
		$this->nama=$nama;
	}
	function getx(){
		return $this->nama;
	}
}
class hewanDarat extends hewan {
	function __construct() {
		echo "Ini adalah kelas khusus Hewan yang hidup di Darat <br/>";
	}
	function setx($nama){
		$this->nama=$nama;
	}
	function getx(){
		return $this->nama;
	}
}
$hewan=new hewan();
$hewanDarat=new hewanDarat();
$hewanDarat->setx("Serigala");
echo $hewanDarat->getx();
?>