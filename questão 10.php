<?php


function decodificarCifraCesar($mensagem_codificada, $deslocamento) {
    $mensagem_decodificada = '';

    
    foreach ($mensagem_codificada as $char) {
        
        if (ctype_alpha($char)) {
           
            $ascii = ord($char);
            
            
            $ascii -= $deslocamento;

          
            if ($ascii < 65) {
                $ascii += 26;
            }

            
            $char_decodificado = chr($ascii);
            
            
            $mensagem_decodificada .= $char_decodificado;
        } else {
           
            $mensagem_decodificada .= $char;
        }
    }

    return $mensagem_decodificada;
}


$num_casos = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $num_casos; $i++) {
   
    $mensagem_codificada = trim(fgets(STDIN));
    $deslocamento = intval(trim(fgets(STDIN)));

    
    $mensagem_codificada_array = str_split($mensagem_codificada);

    
    echo decodificarCifraCesar($mensagem_codificada_array, $deslocamento) . "\n";
}
