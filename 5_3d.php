<?php

$info = array();
$mayor1 = 0;
$employees = [
    13 => [
        'firstname' => 'Mark',
        'lastname' => 'Gil',
        'salary' => 3800
    ],
    3 => [
        'firstname' => 'Frank',
        'lastname' => 'Williams',
        'salary' => 2000
    ],
    42 => [
        'firstname' => 'Saul',
        'lastname' => 'Goodman',
        'salary' => 4800
    ]
];

echo "<ul>";
foreach ($employees as $key => $value) {
    //echo $key;
    $option = $employees[$key]['salary'];
    switch ($option) {
        case $option < 1000:
            $sal = "bajo";
            break;

        case $option > 1000 && $option < 2000:
            $sal = "medio";
            break;

        default:
            $sal = "alto";
            break;
    }

    $nuevosal = $sal;

    if (isset($mayor)) {
        if ($option >= $mayor) {
            $mayor = $option;
        } else {
            $mayor = $mayor;
        }
    } else {
        $mayor = $option;
    }
    $mayor = $mayor;

    echo "<li>" . $employees[$key]['firstname'] . " " . $employees[$key]['lastname'] . " (ID" . $key . ")" . " tiene un salario de " . $employees[$key]['salary'] . "€ " . $nuevosal . "</li>";
}
foreach ($employees as $key => $value) {
    if ($mayor == $employees[$key]['salary']) {
        $info = $employees[$key];
    }
}
echo "</ul>";
echo $info['firstname'] . "  " . $info['lastname'] . " tiene el mayor salario de todos.";
