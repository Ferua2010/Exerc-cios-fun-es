<?php
declare(strict_types=1);

$peso = 65.0;

$altura = 1.75;

function calcularIMC(float $peso, float $altura): float{
    return $peso / ($altura * $altura);
}

echo "O valor do seu IMC é de " . calcularIMC($peso, $altura);
?>



















