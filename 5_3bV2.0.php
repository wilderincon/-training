<?php

/**
Var definition
 */

$numeros  = 0;
$terminar = 1000;

while ($numeros <= $terminar) {
    $final     = ($numeros + 1);
    $terminar2 = ($terminar + 1);
    $par       = ($numeros % 2);
    if ($par !== 1) {
        if ($final !== $terminar2) {
            if ($numeros !== 0) {
                if ($final <= $terminar) {
                    echo ',';
                }
            }
        }
    } else {
        echo $numeros;
    }

    $numeros++;
}
