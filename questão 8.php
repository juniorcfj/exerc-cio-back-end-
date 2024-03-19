<?php


function calcularLEDs($numero) {
   
    $leds_por_digito = [
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    ];

    
    $total_leds = 0;

   
    $num_str = strval($numero);

    
    for ($i = 0; $i < strlen($num_str); $i++) {
        $total_leds += $leds_por_digito[$num_str[$i]];
    }

    return $total_leds;
}


$num_casos = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $num_casos; $i++) {
    $numero = intval(trim(fgets(STDIN)));
    echo calcularLEDs($numero) . " leds\n";
}
