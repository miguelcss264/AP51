<?php
$hermano1 = $_GET['hermano1'];
$hermano2 = $_GET['hermano2'];

function diferencia($edad1, $edad2){
    return abs($edad1-$edad2);
}

echo "La diferencia es " . diferencia($hermano1, $hermano2);

?>