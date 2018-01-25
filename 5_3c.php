<?php

$cadena1 = "abcd1145415545545efgh";
$cadena2 = "abcdefghijklmnopqrstu";

$count1 = strlen($cadena1);
$count2 = strlen($cadena2);

if ($count1 > $count2) {
    $difCaracteres = $count1 - $count2;
    $message = " La cadena1 es mayor que la cadena2 en " . $difCaracteres . " caracteres";
} elseif ($count2 > $count1) {
    $difCaracteres = $count2 - $count1;
    $message = "La cadena1 es menor que la cadena2 en " . $difCaracteres . " caracteres";
} else {
    $message = "Las cadenas son iguales y tienen " . $count1 . " caracteres";
}

echo $message;












