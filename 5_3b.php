<?php

$numeros = 0;
$terminar = 11;

while ( $numeros <= $terminar) {
	$final = $numeros + 1;
	//echo $final;
	# code...
	$par = $numeros % 2;
	if ($par == 1){


		echo $numeros;

     }
     elseif($final !== $terminar ){
     	//echo "entra if 1";
       if($numeros !== 0){
       	//echo "entra al if 2</br>";
       	if($final <= $terminar){
       		echo ",";
       	}
       }
     }

	$numeros++;
}