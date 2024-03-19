<?php


function maiorTamanhoPilha($F1, $F2) {
   
    while ($F2 != 0) {
        $temp = $F2;
        $F2 = $F1 % $F2;
        $F1 = $temp;
    }

   
    return $F1;
}


$N = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $N; $i++) {
   
    list($F1, $F2) = explode(" ", trim(fgets(STDIN)));

    
    $maior_tamanho = maiorTamanhoPilha($F1, $F2);

    
    echo $maior_tamanho . "\n";
}
