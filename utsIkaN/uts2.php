<?php
$ai = $_POST["i"];
$aj = $_POST["j"];

echo "<br />";echo "<br />";
for ($i=$ai; $i<=5; $i++){
	for ($j=$aj; $j<=5; $j++){
		echo $i." ";
	}
	echo "<br />";
}
?>