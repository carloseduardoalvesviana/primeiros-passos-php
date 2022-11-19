<?php

$contador = 1;

// enquanto isso for verdade
while ($contador <= 15) {
    // faz isso
    echo "#while ".$contador.PHP_EOL;
    $contador = $contador + 1;
}

// para isso(condicao)
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        // pula o proximo codigo e volta ao inicio
        continue;
    }
    if ($contador == 14) {
        // mata o codigo
        break;
    }
    // faça isso
    echo "#for ".$contador.PHP_EOL;
}
