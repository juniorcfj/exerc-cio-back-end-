<?php

while (true) {
    
    if (feof(STDIN)) {
        break;
    }

   
    $numLesmas = intval(trim(fgets(STDIN)));

    
    $velocidades = explode(' ', trim(fgets(STDIN)));

    
    $maxVelocidade = 0;

    
    foreach ($velocidades as $velocidade) {
        
        if ($velocidade > $maxVelocidade) {
            $maxVelocidade = $velocidade;
        }
    }

    
    if ($maxVelocidade < 10) {
        echo "1\n";
    } elseif ($maxVelocidade < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}
