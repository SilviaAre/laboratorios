<?php

	$monto = $_REQUEST['monto'];
	$tipo = $_REQUEST['lista'];
	$cambio = 29.15;


		if ($tipo == 1) 
		{
			$ret = $monto * $cambio;
			echo "<strong>Cambio en Córdobas:</strong> C$", $ret;
		}
		else
		{
			if ($tipo == 2) 
			{
				$ret = $monto /$cambio;
				echo "Cambio en Dólares: US", $ret;
			}
		}

  ?>