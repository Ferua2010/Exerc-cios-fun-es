<?php
declare(strict_types=1);

/**
 * Exercício 5 - Carrinho de Compras
 * Calcula o total de uma lista de produtos
 */

function calcularCarrinho(array $produtos): float {
    $total = 0.0;
    
    foreach ($produtos as $produto) {
        $total += $produto['preco'] * $produto['quantidade'];
    }
    
    return $total;
}

// Teste
$produtos = [
    ["nome" => "Caderno", "preco" => 25.00, "quantidade" => 2],
    ["nome" => "Caneta", "preco" => 3.50, "quantidade" => 4],
    ["nome" => "Borracha", "preco" => 2.00, "quantidade" => 3],
];

echo "=== Carrinho de Compras ===" . PHP_EOL . PHP_EOL;

foreach ($produtos as $produto) {
    $subtotal = $produto['preco'] * $produto['quantidade'];
    echo "{$produto['nome']}: {$produto['quantidade']} x R$ " . number_format($produto['preco'], 2, ',', '.') . " = R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
}

echo PHP_EOL . "Total: R$ " . number_format(calcularCarrinho($produtos), 2, ',', '.') . PHP_EOL;
?>