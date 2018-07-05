<?php 
	
	//$ip = $_GET['ip'];
	//$mascara = $_GET['mascara'];
	$ip = '192.168.0.1';
	$mascara = 25;

	$octetos = explode(".", $ip);

	$bits = 32-$mascara;

	$endereços = pow(2, $bits);

	$subredes = 256/$endereços;

	$qual_subrede = (int)($octetos[3]/$endereços);
	
	$prim_end = $qual_subrede

?> 