<?php
declare(strict_types=1);

/**
 * Exercício 6 - Aplicação de Desconto por Referência
 * Altera o preço original usando passagem por referência
 */

function aplicarDesconto(float &$preco, float $porcentagem): void {
    $preco = $preco * (1 - $porcentagem / 100);
}

// Teste
$precoOriginal = 200.00;
$desconto = 15.0;

echo "=== Aplicação de Desconto ===" . PHP_EOL . PHP_EOL;

echo "Preço antes: R$ " . number_format($precoOriginal, 2, ',', '.') . PHP_EOL;
echo "Desconto: {$desconto}%" . PHP_EOL;

aplicarDesconto($precoOriginal, $desconto);

echo "Preço depois: R$ " . number_format($precoOriginal, 2, ',', '.') . PHP_EOL;
?>