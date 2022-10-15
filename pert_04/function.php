<?php

function tuliskan($teks,$jumlah) {
	for ($i=1;$i<=$jumlah;$i++)
	print("<br>$teks<br>");
}

tuliskan("OKE",5);
print("<br>\n");
tuliskan("BYE",10);
?>