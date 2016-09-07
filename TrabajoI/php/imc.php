<?php 
	$peso = $_REQUEST['peso'];
	$alt = $_REQUEST['alt'];

		$resp = $peso/($alt*$alt);
		echo "Su Indice de masa corporal es: $resp kg/m2";





 ?>