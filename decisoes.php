<?php

$idade = 19;
$numeroDePessoas = 2;

echo "voce so pode entrar se sua idade for maior ou igual a 18 anos" . PHP_EOL ;

if ($idade >= 18) {
    echo "voce tem $idade de anos. pode entrar sozinho". PHP_EOL ;
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "voce so tem $idade de anos. mas pode entrar com seu acompanhante". PHP_EOL ;
} else {
    echo "voce so tem $idade de  anos. nao pode entrar";
}

echo "tchau!" . PHP_EOL;
