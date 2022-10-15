<?php
	$i = $_POST["i"] ;
	$num = $_POST["num"] ;
	
	while ($i < 10) {
		$num--;
		$i++;
	}
	echo ("Loop berhenti ketika i = $i dan num = $num");
?>