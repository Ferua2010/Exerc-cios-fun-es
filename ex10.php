<?php
declare(strict_types=1);

/**
 * Exercício 10 - Controle de Estoque
 * Retira produtos do estoque usando referência
 */

function retirarEstoque(array &$produto, int $quantidade): bool {
    if ($quantidade <= 0 || $quantidade > $produto['estoque']) {
        return false;
    }
    
    $produto['estoque'] -= $quantidade;
    return true;
}

// Teste 1: Retirada permitida
$produto1 = ["nome" => "Notebook", "estoque" => 10];

echo "=== Controle de Estoque ===" . PHP_EOL . PHP_EOL;

echo "Teste 1 - Retirada Permitida:" . PHP_EOL;
echo "Produto: {$produto1['nome']} | Estoque inicial: {$produto1['estoque']}" . PHP_EOL;

$sucesso = retirarEstoque($produto1, 3);

if ($sucesso) {
    echo "Retirada de 3 unidades: SUCESSO ✓" . PHP_EOL;
    echo "Estoque atual: {$produto1['estoque']}" . PHP_EOL;
} else {
    echo "Retirada recusadas." . PHP_EOL;
}

echo PHP_EOL;

// Teste 2: Retirada recusada (quantidade maior que estoque)
$produto2 = ["nome" => "Mouse", "estoque" => 5];

echo "Teste 2 - Retirada Recusada:" . PHP_EOL;
echo "Produto: {$produto2['nome']} | Estoque inicial: {$produto2['estoque']}" . PHP_EOL;

$sucesso = retirarEstoque($produto2, 10);

if ($sucesso) {
    echo "Retirada de 10 unidades: SUCESSO ✓" . PHP_EOL;
    echo "Estoque atual: {$produto2['estoque']}" . PHP_EOL;
} else {
    echo "Retirada de 10 unidades: RECUSADA ✗ (estoque insuficiente)" . PHP_EOL;
    echo "Estoque permaneceu: {$produto2['estoque']}" . PHP_EOL;
}
?>