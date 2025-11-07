<?php

$num = $_GET['numero'];

function numRomano($numero){
    $romanos = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X'
    ];
    
    return $romanos[$numero];  
}

echo "El numero " . $num . " en romano es: " . numRomano($num);

?>