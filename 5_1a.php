<?php
$num1 = 41;
$num2 = 2.1;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multi = $num1 * $num2;
$divi = $num1 / $num2;
$mod = $num1 % $num2;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            th{
                border: solid 1px green;
            }
            .title-head{
                background: blue;
            }
        </style>

    </head>
    <body>
        <table>
            <tr>
                <th class='title-head'>Simbolo</th>
                <th class='title-head'>Descipción</th>
                <th class='title-head'>Resultado</th>
            </tr>
            <tr>
                <th>+</th>
                <th>El resultado de sumar 41 y 2.1 es:</th>
                <th><?php echo $suma; ?></th>
            </tr>
            <tr>
                <th> - </th>
                <th>El resultado de restar 41 y 2.1 es:</th>
                <th><?php echo $resta; ?></th>
            </tr>
            <tr>
                <th> * </th>
                <th>El resultado de Multiplicar 41 y 2.1 es:</th>
                <th><?php echo $multi; ?></th>
            </tr>
            <tr>
                <th> / </th>
                <th>El resultado de Dividir 41 y 2.1 es:</th>
                <th><?php echo $divi; ?></th>
            </tr>
            <tr>
                <th> % </th>
                <th>El resultado de Residuo de la divición entre 41 y 2.1 es:</th>
                <th><?php echo $mod; ?></th>
            </tr>
        </table>
    </body>
</html>