<?php
	$time_start = microtime(true);
	$ch = curl_init('http://www.pnpdance.com/index.php?compile=vars');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	exit("Completed in " . $time . " seconds");
?>