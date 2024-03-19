<?php


function ordenarNumeros($numeros) {
    
    $pares = [];
    $impares = [];
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }

    
    sort($pares);

    rsort($impares);

    $ordenados = array_merge($pares, $impares);

    return $ordenados;
}

$n = intval(trim(fgets(STDIN)));

$numeros = [];
for ($i = 0; $i < $n; $i++) {
    $numeros[] = intval(trim(fgets(STDIN)));
}

$numeros_ordenados = ordenarNumeros($numeros);

foreach ($numeros_ordenados as $numero) {
    echo $numero . "\n";
}
