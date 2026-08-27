<?php
declare(strict_types=1);

/**
 * Exercício 8 - Limpeza e Formatação de CPF
 * Remove caracteres especiais e valida CPF
 */

function limparCPF(string $cpf): string {
    return str_replace(['.', '-'], '', $cpf);
}

function cpfValido(string $cpf): bool {
    $cpfLimpo = limparCPF($cpf);
    return strlen($cpfLimpo) === 11 && is_numeric($cpfLimpo);
}

// Testes
$cpfs = [
    "123.456.789-00",
    "12345678900",
    "123.456-789",
    "1234567890",
    "987.654.321-00",
];

echo "=== Validação de CPF ===" . PHP_EOL . PHP_EOL;

foreach ($cpfs as $cpf) {
    $cpfLimpo = limparCPF($cpf);
    $valido = cpfValido($cpf) ? "Válido ✓" : "Inválido ✗";
    echo "CPF: {$cpf} → Limpo: {$cpfLimpo} → {$valido}" . PHP_EOL;
}
?>