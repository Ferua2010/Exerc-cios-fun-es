<?php
declare(strict_types=1);

/**
 * Exercício 9 - Cadastro de Clientes
 * Busca cliente pelo nome
 */

function buscarCliente(array $clientes, string $nome): ?array {
    foreach ($clientes as $cliente) {
        if ($cliente['nome'] === $nome) {
            return $cliente;
        }
    }
    return null;
}

// Teste
$clientes = [
    ["nome" => "Maria", "email" => "maria@email.com", "telefone" => "11111-1111"],
    ["nome" => "João", "email" => "joao@email.com", "telefone" => "22222-2222"],
    ["nome" => "Ana", "email" => "ana@email.com", "telefone" => "33333-3333"],
];

echo "=== Busca de Clientes ===" . PHP_EOL . PHP_EOL;

$nomesBusca = ["João", "Pedro", "Maria"];

foreach ($nomesBusca as $nome) {
    $cliente = buscarCliente($clientes, $nome);
    
    if ($cliente !== null) {
        echo "Cliente encontrado: {$cliente['nome']} | Email: {$cliente['email']}" . PHP_EOL;
    } else {
        echo "Cliente '{$nome}' não encontrado." . PHP_EOL;
    }
}
?>