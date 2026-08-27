Quando um parâmetro é declarado como float &$valor, a função recebe uma referência à variável original, não uma cópia do valor. Isso significa que qualquer alteração feita em $valor dentro da função afeta diretamente a variável passada como argumento.

Diferença:

Cópia (passagem por valor): A função trabalha com uma cópia; mudanças não afetam a variável original.

Referência (passagem por referência): A função trabalha com a própria variável; mudanças persistem após a chamada.

##### Exercício 8

| Função       | Categoria | Finalidade                                         | Parâmetros principais                                    | Retorno                     |
| ------------ | --------- | -------------------------------------------------- | -------------------------------------------------------- | --------------------------- |
| strlen()     | String    | Retorna o tamanho de uma string                    | string $string                                           | int (número de bytes)       |
| explode()    | String    | Divide uma string em um array usando um separador  | string $separator, string $string, int $limit (opcional) | array                       |
| implode()    | String    | Junta elementos de um array em uma string          | string $separator, array $array                          | string                      |
| count()      | Array     | Conta o número de elementos de um array            | array $array, int $mode (opcional)                       | int                         |
| array_push() | Array     | Adiciona um ou mais elementos ao final de um array | array &$array, mixed ...$values                          | int (novo tamanho do array) |

##### Exercício 9

**Resultado exibido: 90100**

aplicarDesconto($valor) retorna 90 (100 × 0.90), mas não altera $valor porque o parâmetro é passado por valor (cópia),
o primeiro echo exibe 90 (valor retornado), o segundo echo exibe 100 (valor original de $valor, que permanece inalterado).

##### Exercício 10

Conforme a documentação oficial do PHP:

Sintaxe: strlen(string $string): int

Parâmetro recebido:

$string (tipo string) — a string que terá seu tamanho medido

Tipo de retorno: 

int — o tamanho da string em bytes








