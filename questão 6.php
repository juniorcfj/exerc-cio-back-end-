<?php


function calcularMinutosSono($hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme) {
    
    $minutos_atual = $hora_atual * 60 + $minuto_atual;
    $minutos_alarme = $hora_alarme * 60 + $minuto_alarme;

    
    if ($minutos_atual < $minutos_alarme) {
        return $minutos_alarme - $minutos_atual;
    } else {
        return 1440 - ($minutos_atual - $minutos_alarme);
    }
}


while (true) {
    
    fscanf(STDIN, "%d %d %d %d", $hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme);

   
    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }

    
    echo calcularMinutosSono($hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme) . "\n";
}
