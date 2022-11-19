<?php

// peso ÷ (altura x altura)

$peso = 50;
$altura = 1.78;

$resultado = ($peso / ($altura ** 2));

if ($resultado < 18.5) {
    echo "magreza" . $resultado;
} elseif ($resultado >= 18.5 && $resultado <= 24.9) {
    echo "normal". $resultado;
} elseif ($resultado >= 25 && $resultado <= 29.9) {
    echo "SOBREPESO". $resultado;
} elseif ($resultado >= 30 && $resultado <= 39.9) {
    echo "OBESIDADE". $resultado;
} else {
    echo "OBESIDADE GRAVE". $resultado;
}
