# Exercícios Teóricos

##### Exercício 1:

Uma função é um bloco de codigo criado para fazer uma função especifica. Ela pode receber dados, processálos e devolver um resultado.Duas vantagens são:- A mesma função pode ser chamada várias vezes- Deixa o programa mais fácil de entender e corrigir

##### Exercício 2:
Repetir o mesmo bloco várias vezes pode causar problemas e atrpalhar o dev porque caso ele queria trocar a regra terá de fazer em todos os blocos.A função evita isso porque faz com que tudo se concentre em um lugar só.

##### Exercício 3:
Um parametro é a variavel na função para receber um valor, já o retorno é o valor que a função devolve depois de processar.

```php
function calcularTotal(float $preco, int $quantidade): float {    return $preco * $quantidade;}
```
Parametro = (float $preco, int $quantidade) 
Retorno = $preco * $quantidade;

##### Exercício 4:
```php
function cadastrar(string $nome, int $idade): bool.
```

- function = para declarar uma função;
- cadastrar = tipo da função;
- $nome = parametro do tipo string;
- $idade = parametro do tipo int;
- bool = tipo do valor que a função irá retornar

##### Exercício 5:
Uma função que retorna string produz e devolve um texto para quem chamou, enquanto a função void não retorna um valor ela geralmente ela executa uma ação como exibir uma mensagem um ou registrar informações.

##### Exercício 6:
O codigo não consegue acessar a variavel porque foi criada no escopo global enquanto, a função possui o seu escopo local:

**Primeira**
```php
$cliente = "Mariana";function exibirCliente(): string {    global $cliente;    return $cliente;}
```
**Segunda**
```php
$cliente = "Mariana";function exibirCliente(string $cliente): string {    return $cliente;}echo exibirCliente($cliente);
```
A mais recomendada é a segunda opção.

##### Exercício 7

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

### **entreguei com atraso pois estava ajudando a Fabiana (sou representante)**








