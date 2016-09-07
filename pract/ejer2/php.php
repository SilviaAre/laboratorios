<?php 
	$a = $_REQUEST['valor1'];
	$b = $_REQUEST['valor2'];
	$c = $_REQUEST['valor3'];

	if ($_REQUEST['operador']=="area") {
		$r_area = mult($a,$b,$c);
		echo "El área es: $r_area";
	}

	else
	
		if ($_REQUEST['operador']=="operacion") {
		$r_ope = ope($a,$b,$c);
		echo "Resultado de la operacion: $r_ope";

	}
	
	function mult($a, $b, $c){
		$area = $a*$b*$c;
		return $area;
	}
	function ope($a, $b, $c){
		$ope = ($a+7*$c)/($b+2-$a)+2*$b;
		return $ope;
	}
 ?>