<?php

$info      = [];
$mayor1    = 0;
$employees = [
    13 => [
        'firstname' => 'Mark',
        'lastname' => 'Gil',
        'salary' => 7800
    ],
    3 => [
        'firstname' => 'Frank',
        'lastname' => 'Williams',
        'salary' => 5000
    ],
    42 => [
        'firstname' => 'Saul',
        'lastname' => 'Goodman',
        'salary' => 2000
    ]
];

echo '<ul>';
foreach ($employees as $key => $value) {
    $option = $employees[$key]['salary'];
    switch ($option) {
        case $option < 1000:
            $sal = 'bajo';
        break;

        case ($option > 1000)&&($option < 2000):
            $sal = 'medio';
        break;

        default:
            $sal = 'alto';
        break;
    }

    $nuevosal = $sal;

    if (isset($mayor) === true) {
        if ($option >= $mayor) {
            $mayor = $option;
        } else {
            $mayor = $mayor;
        }
    } else {
        $mayor = $option;
    }

    $mayor = $mayor;

    if ($mayor === $employees[$key]['salary']) {
        $info = $employees[$key];
    }

    echo '<li>'.$employees[$key]['firstname'].' '.$employees[$key]['lastname'].'(ID'.$key.') tiene un salario de '
        .$employees[$key]['salary'].'€'.$nuevosal.'</li>';
}//end foreach

echo '</ul>';
echo $info['firstname'].''.$info['lastname'].' tiene el mayor salario de todos.';
