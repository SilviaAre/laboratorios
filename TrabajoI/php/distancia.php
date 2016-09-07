<?php 

	$medida = $_REQUEST['medida'];
	$op = $_REQUEST['op'];
	$conv	= $_REQUEST['conv'];

	switch ($op)
	 {
		case 'cm':
			if ($conv == 'cm')
			{

				echo "<strong>cm:</strong> $medida";
			}

			if ($conv == 'pul')
			 {	
			 	# cm * 0.39370
			 	$resp = $medida * 0.3937008;
				echo "<strong>pul:</strong> $resp";
			}
			if ($conv == 'm')
			 {
			 	# cm * 0.01
			 	$resp = $medida * 0.01;
				echo "<strong>m:</strong> $resp";
			}
			if ($conv == 'km')
			 {

			 	# cm * 0.00001
			 	$resp = $medida * 0.00001;
				echo "<strong>km:</strong> $resp";
			}
			break;

		case 'pul':
			if ($conv == 'cm')
			{	
				# pul* 2.54
				$resp = $medida*2.54;
				echo "<strong>cm:</strong> $resp";
			}

			if ($conv == 'pul')
			 {	
				echo "<strong>pul:</strong> $medida";
			}
			if ($conv == 'm')
			 {
			 	# pul * 0,0254
			 	$resp = $medida * 0.0254;
				echo "<strong>m:</strong> $resp";
			}
			if ($conv == 'km')
			 {
			 	# pul * 2.540005
			 	$resp = $medida * 2.540005;
				echo "<strong>km:</strong> $resp";
			}
			break;

			case 'm':
			if ($conv == 'cm')
			{	
				# m* 100
				$resp = $medida*100;
				echo "<strong>cm:</strong> $resp";
			}

			if ($conv == 'pul')
			 {	
			 	# m* 39.3701
				$resp = $medida*39.3701;
				echo "<strong>pul:</strong> $resp";
			}
			if ($conv == 'm')
			 {
				echo "<strong>m:</strong> $medida";
			}
			if ($conv == 'km')
			 {
			 	# m * 0,00100000054
			 	$resp = $medida * 0.00100000054;
				echo "<strong>km:</strong> $resp";
			}
			break;

			case 'km':
			if ($conv == 'cm')
			{	
				# km* 100000
				$resp = $medida*100000;
				echo "<strong>cm:</strong> $resp";
			}

			if ($conv == 'pul')
			 {	
			 	# km* 39370,1
				$resp = $medida*39370.1;
				echo "<strong>pul:</strong> $resp";
			}
			if ($conv == 'm')
			 {	
			 	# km* 1000
				$resp = $medida*1000;
				echo "<strong>m:</strong> $resp";
			}
			if ($conv == 'km')
			 {
				echo "<strong>km:</strong> $medida";
			}

			break;
		
		
		default:
			echo "Elija una unidad de conversión";
			break;
	}











?>