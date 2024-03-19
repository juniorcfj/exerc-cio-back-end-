<?php


function criptografar($mensagem) {
    $mensagem_cripto = '';

    
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $char = $mensagem[$i];
        if (ctype_alpha($char)) {
            $mensagem_cripto .= chr(ord($char) + 3);
        } else {
            $mensagem_cripto .= $char;
        }
    }

    
    $mensagem_cripto = strrev($mensagem_cripto);

    
    $metade = ceil(strlen($mensagem_cripto) / 2);
    for ($i = $metade; $i < strlen($mensagem_cripto); $i++) {
        if (ctype_alpha($mensagem_cripto[$i])) {
            $mensagem_cripto[$i] = chr(ord($mensagem_cripto[$i]) - 1);
        }
    }

    return $mensagem_cripto;
}


while (($num_linhas = intval(trim(fgets(STDIN)))) !== 0) {
    
    for ($i = 0; $i < $num_linhas; $i++) {
        $linha = trim(fgets(STDIN));
        echo criptografar($linha) . "\n";
    }
}
