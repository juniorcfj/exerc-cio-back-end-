<?php


function somaImpares($x, $y) {
    $soma = 0;
    
   
    if ($x > $y) {
      
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    
    
    for ($i = $x + 1; $i < $y; $i++) {
        if ($i % 2 != 0) {
            $soma += $i;
        }
    }
    
    return $soma;
}


while (($x = intval(trim(fgets(STDIN)))) !== false && ($y = intval(trim(fgets(STDIN)))) !== false) {
    
    echo somaImpares($x, $y) . "\n";
}
