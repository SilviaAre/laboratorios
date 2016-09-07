<?php 
	$a = $_REQUEST['valor1'];
	$b = $_REQUEST['valor2'];

	if ($_REQUEST['operador']=="suma") {
		$r_suma = suma($a,$b);
		echo "La suma es: $r_suma";
	}
	else
	{
		if ($_REQUEST['operador']=="resta")
		{
			$r_resta = resta($a,$b);
			echo "La resta es: $r_resta";
		}

		else
		{
			if ($_REQUEST['operador']=="mult")
			{
				$r_mult = mult($a,$b);
				echo "La multiplicación es: $r_mult";
			}

			else
			{
				if ($_REQUEST['operador']=="div")
				{
					$r_div = div($a,$b);
					echo "La división es: $r_div";
				}

			}
			

		}
	

	}
	
	function suma($a, $b){
		$suma = $a+$b;
		return $suma;
	}
	function resta($a, $b){
		$resta = $a-$b;
		return $resta;
	}
	function mult($a, $b){
		$mult = $a*$b;
		return $mult;
	}
	function div($a, $b){
		$div = $a/$b;
		return $div;
	}
 ?>