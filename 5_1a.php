<?php
$num1 = 41;
$num2 = 2.1;

$suma  = ($num1 + $num2);
$resta = ($num1 - $num2);
$multi = ($num1 * $num2);
$divi  = ($num1 / $num2);
$mod   = ($num1 % $num2);
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
        th {
            border: solid 1px green;
        }

        .title-head {
            background: blue;
        }

        span {
            font-weight: 700;
        }

        div {
            line-height: 2;
        }
    </style>

</head>
<body>
<section>
    <div>El resultado de sumar 41 y 2.1 es: <span><?php echo $suma; ?></span></div>
    <div>El resultado de restar 41 y 2.1 es: <span><?php echo $resta; ?></span></div>
    <div>El resultado de Multiplicar 41 y 2.1 es: <span><?php echo $multi; ?></span></div>
    <div>El resultado de la divición de 41 y 2.1 es: <span><?php echo $divi; ?></span></div>
    <div>El resultado de Residuo de la divición entre 41 y 2.1 es: <span><?php echo $mod; ?></span></div>
</section>
</body>
</html>