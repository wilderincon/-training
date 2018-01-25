<?php
$pelicula = ["peliculaUno" => [
    "Identificador" => 1,
    "Titulo" => "Thor: Ragnarok",
    "Director" => "Ben Cooke, Taika Waititi, Tom Hooper",
    "Ano" => 2017,
    "Duracion" => "01:35:50"
], "peliculaDos" => [
    "Identificador" => 2,
    "Titulo" => "Saw VIII",
    "Director" => "Bianca Marini, Daniel Gold, Lawrence",
    "Ano" => 2017,
    "Duracion" => "01:35:50"
], "peliculaTres" => [
    "Identificador" => 3,
    "Titulo" => "Capitán América 3: Civil War",
    "Director" => "Anthony Russo, Joe Russo",
    "Ano" => 2016,
    "Duracion" => "01:35:50"
], "peliculaCuatro" => [
    "Identificador" => 4,
    "Titulo" => "Doctor Strange (Doctor Extraño)",
    "Director" => "Daisy Baldry, Jo Beckett, Michael Lerma",
    "Ano" => 2016,
    "Duracion" => "115 min"
]
]
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        th {
            border: solid 1px black;
            font-weight: 400;

        }

        table {
            border: solid 1px black;
        }

        .title-head {
            background: blue;
        }

        tr {
            background: #a5b7ce;
        }

        .title-head th {
            font-weight: 700;
        }
    </style>
</head>
<body>
<table>
    <tr class="title-head">
        <th>Identificador</th>
        <th>Título</th>
        <th>Director</th>
        <th>Año</th>
        <th>Duración</th>
    </tr>
    <tr>
        <th><?php echo $pelicula["peliculaUno"]["Identificador"]; ?></th>
        <th><?php echo $pelicula["peliculaUno"]["Titulo"]; ?></th>
        <th><?php echo $pelicula["peliculaUno"]["Director"]; ?></th>
        <th><?php echo $pelicula["peliculaUno"]["Ano"] ?></th>
        <th><?php echo $pelicula["peliculaUno"]["Duracion"] ?></th>
    </tr>
    <tr>
        <th><?php echo $pelicula["peliculaDos"]["Identificador"]; ?></th>
        <th><?php echo $pelicula["peliculaDos"]["Titulo"]; ?></th>
        <th><?php echo $pelicula["peliculaDos"]["Director"]; ?></th>
        <th><?php echo $pelicula["peliculaDos"]["Ano"] ?></th>
        <th><?php echo $pelicula["peliculaDos"]["Duracion"] ?></th>
    </tr>
    <tr>
        <th><?php echo $pelicula["peliculaTres"]["Identificador"]; ?></th>
        <th><?php echo $pelicula["peliculaTres"]["Titulo"]; ?></th>
        <th><?php echo $pelicula["peliculaTres"]["Director"]; ?></th>
        <th><?php echo $pelicula["peliculaTres"]["Ano"] ?></th>
        <th><?php echo $pelicula["peliculaTres"]["Duracion"] ?></th>
    </tr>
    <tr>
        <th><?php echo $pelicula["peliculaCuatro"]["Identificador"]; ?></th>
        <th><?php echo $pelicula["peliculaCuatro"]["Titulo"]; ?></th>
        <th><?php echo $pelicula["peliculaCuatro"]["Director"]; ?></th>
        <th><?php echo $pelicula["peliculaCuatro"]["Ano"] ?></th>
        <th><?php echo $pelicula["peliculaCuatro"]["Duracion"] ?></th>
    </tr>
</table>
</body>
</html>