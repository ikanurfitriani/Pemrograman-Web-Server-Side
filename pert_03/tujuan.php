<?php
	$x = $_POST["angkax"] ;
	$y = $_POST["angkay"] ;
	
	for ($a=0; $a<=$x; $a++) {
		$b=0;
		while ($b<=$y) {
			if ($x >= $y){
				echo $x;
                break 2;
			} else {
                echo "Nilai x lebih kecil dari y";
                break 2;
			}
            $b++;
		}
        echo "<br>";
    }
?>