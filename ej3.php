<?php

function dameNumero(){

    return rand(1, 49);

}

$numeros = [];

while (count($numeros) < 6) {
    $num = dameNumero();
    if (in_array($num, $numeros)) {
    } else {
        $numeros[] = $num;
        echo $num . " ";
    }
}


?>
