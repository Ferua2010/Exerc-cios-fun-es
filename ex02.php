<?php
declare(strict_types=1);

$imc = 20;


function calcularIMC(float $imc): string{
    if($imc < 18.5) {
    return "Abaixo do peso";
} elseif($imc >= 18.5 && $imc <= 24.9) {
    return "Peso Normal";
} elseif($imc >= 25.0 && $imc <= 29.9){
    return "Sobre peso";
} else {
    return "Obesidade";

}

}

echo "Sua clasificação no IMC é " . calcularIMC($imc);
?>


























