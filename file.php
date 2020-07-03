<?php


$day = 7;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Рабочие дни';
        break;
    case 6:
    case 7:
        echo 'Выходные дни';
        break;
    default:
        echo "I don't know the day like this";
}

echo '<hr><br>';

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[] = $i * 2 . '<br>';
    }
echo '<pre>';
print_r($array);

for ($i = 1; $i < sizeof($array); $i++) {
    print_r($array[$i]);
}








