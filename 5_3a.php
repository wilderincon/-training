<?php
$pelicula = [
    [
        "Identificador" => 1,
        "Titulo" => "Thor: Ragnarok",
        "Director" => "Ben Cooke, Taika Waititi, Tom Hooper",
        "Ano" => 2017,
        "Duracion" => "01:35:50"
    ],
    [
        "Identificador" => 2,
        "Titulo" => "Saw VIII",
        "Director" => "Bianca Marini, Daniel Gold, Lawrence",
        "Ano" => 2017,
        "Duracion" => "01:35:50"
    ],
    [
        "Identificador" => 3,
        "Titulo" => "Capitán América 3: Civil War",
        "Director" => "Anthony Russo, Joe Russo",
        "Ano" => 2016,
        "Duracion" => "01:35:50"
    ],
    [
        "Identificador" => 4,
        "Titulo" => "Doctor Strange (Doctor Extraño)",
        "Director" => "Daisy Baldry, Jo Beckett, Michael Lerma",
        "Ano" => 2016,
        "Duracion" => "115 min"
    ],
    [
        "Identificador" => 5,
        "Titulo" => "Muerte Subita",
        "Director" => "Ara Paiaya",
        "Ano" => 2017,
        "Duracion" => "145 min"
    ]
];
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
    <?php
    for ($i = 0; $i < count($pelicula); $i++) {

        echo '<tr>
                <th>' . $pelicula[$i]["Identificador"] . '</th>
                <th>' . $pelicula[$i]["Titulo"] . '</th>
                <th>' . $pelicula[$i]["Director"] . '</th>
                <th>' . $pelicula[$i]["Ano"] . '</th>
                <th>' . $pelicula[$i]["Duracion"] . '</th>
            </tr>
            ';
    }
    ?>
</table>
</body>
</html>