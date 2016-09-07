<?php
	$ph = $_REQUEST['ph'];
	$ht = $_REQUEST['ht'];


	$sal = $ph * $ht;
	$ir = $sal * 0.15;
	$inss = $sal * 0.0625;
	$sal_neto = $sal - $ir - $inss;
	print" <h2>  Descripción: </h2><br/>"; 
	echo "Salario: $sal <br/>";
	echo "Deducción de Ir: $ir <br/>";
	echo "Deducción del Inss: $inss <br/>";
	echo "Salario Neto: $sal_neto <br/>";



?>