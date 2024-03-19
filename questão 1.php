<?php


function maior($a, $b) {
    return ($a + $b + abs($a - $b)) / 2;
}


function maiorEntreTres($a, $b, $c) {
    return maior(maior($a, $b), $c);
}


fscanf(STDIN, "%d %d %d", $valor1, $valor2, $valor3);


$maior = maiorEntreTres($valor1, $valor2, $valor3);


echo $maior . " eh o maior\n";

?>
