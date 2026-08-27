<?php
declare(strict_types=1);

/**
 * Exercício 4 - Formatador de Nome
 * Formata nome: remove espaços, minúsculas, primeira letra maiúscula
 */

function formatarNome(string $nome): string {
    return ucfirst(strtolower(trim($nome)));
}

// Testes com diferentes formatos
$nomes = ["  MARIA  ", "joão SILVA", "  Ana Paula  ", "PEDRO", " luiz fernandez "];

echo "=== Formatador de Nome ===" . PHP_EOL . PHP_EOL;

foreach ($nomes as $nome) {
    echo "Original: '{$nome}' → Formatado: '" . formatarNome($nome) . "'" . PHP_EOL;
}
?>