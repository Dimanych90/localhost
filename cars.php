<?php

$cars = ['BMW' => ['Model' => 'X6', 'Speed' => 180, 'Doors' => 5, 'Year' => 2007],
    'Tayota' => ['Model' => 'Crown', 'Speed' => 230, 'Doors' => 4, "Year" => 1999],
    'Honda' => ['Model' => 'Accord', 'Speed' => 250, 'Doors' => 4, "Year" => 2009]];

foreach ($cars as $car => $value) {
    echo '<br>' . 'Car ' . $car . '<br>';
    echo implode(' ', $value);
}
var_dump($cars);

echo '<hr><br>';


echo '<table border= "1">';

for ($tr = 1; $tr <= 10; $tr++) {

    echo '<tr><td>' . $tr . '</td>';

    for ($td = 2; $td <= 10; $td++) {
        if ($tr > 1) {
            $result = $td * $tr;
            if ($td % 2 == 0) {
                echo '<td>(' . $result . ')</td>';
            } elseif ($td % 2 != 0) {
                echo '<td>[' . $result . ']</td>';
            } else {
                echo '<td>' . $result . '</td>';
            }
        } else {
            echo '<td>' . $td . '</td>';
        }
    }
}

echo '</table>';

echo '<hr><br>';

