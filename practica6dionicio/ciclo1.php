<?php 
#$in=0;

#do
 #{
#	echo "Hacer mientras";
#	print $in++;
#	print $in++;
 # } while ($in<=10);


   #while ($in<=10);
  # {

	# echo "Mientras";
	 #print $in++;
   #}
$i=1; $num2y3=0; $num3=0; $num2=0; 
while ($i <= 10) 
	{
		if (($i % 2 == 0) AND ($i % 3 == 0)) 
		{	
			echo "$i es multiplo de 2 y 3<br>";
			$num2y3+=1;
			
		}

		elseif($i%2==0)
		{
			
			echo "$i es multiplo de 2<br>";
			$num2+=1;
			
		}
		elseif($i%3==0)
		{
			 
			 
			echo "$i es multiplo de 3<br>";
			$num3+=1;
		
		
		} 
		else
		{
			echo "$i no es multiplo de 2 ni de 3<br>";
		}
		$i+=1;

	}
	echo "_____________________________<br>";
	echo "$i es multiplo de 2 y 3<br>";
	echo "$i es multiplo de 2<br>";
	echo "$i es multiplo de 3<br>";
	echo "Los restantes".(10-$num2y3-$num2-$num3)."numeros no son multiplos de 2 ni de 3";


?>


