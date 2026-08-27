<?php
declare(strict_types=1);

/**
 * Exercício 7 - Relatório de Notas
 * Calcula média e verifica aprovação
 */

function calcularMedia(array $notas): float {
    return array_sum($notas) / count($notas);
}

function verificarAprovacao(float $media): string {
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Teste
$notas = [6.5, 8.0, 7.5, 9.0, 5.5];

echo "=== Relatório de Notas ===" . PHP_EOL . PHP_EOL;

$media = calcularMedia($notas);
$situacao = verificarAprovacao($media);

echo "Notas: " . implode(', ', $notas) . PHP_EOL;
echo "Maior nota: " . max($notas) . PHP_EOL;
echo "Menor nota: " . min($notas) . PHP_EOL;
echo "Média: " . number_format($media, 2, ',', '.') . PHP_EOL;
echo "Situação: {$situacao}" . PHP_EOL;
?>