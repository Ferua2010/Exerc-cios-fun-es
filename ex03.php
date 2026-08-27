<?php
declare(strict_types=1);

/**
 * Exercício 3 - Validador de Senha
 * Verifica se a senha tem mais de 8 caracteres
 */

function senhaForte(string $senha): bool {
    return strlen($senha) > 8;
}

// Testes
$senhas = ["123456", "senhaforte123", "abc", "minhasenha123"];

echo "=== Validador de Senha ===" . PHP_EOL . PHP_EOL;

foreach ($senhas as $senha) {
    $resultado = senhaForte($senha) ? "Senha forte ✓" : "Senha fraca ✗";
    echo "Senha '{$senha}' ({} caracteres) → {$resultado}" . PHP_EOL;
}
?>