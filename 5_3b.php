<?php

$numeros  = 0;
$terminar = 100;

while ($numeros <= $terminar) {
    $par = ($numeros % 2);
    if ($par === 1) {
        if ($numeros !== 0) {
            if ($numeros !== 1 && $numeros >= 0) {
                echo ',';
            }
        }

        echo $numeros;
    }

    if ($numeros === $terminar) {
        break;
    }

    $numeros++;
}
