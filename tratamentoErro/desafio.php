<div class="titulo">Desafio intdiv</div>

<?php
/*  O método intdiv para...
    - lançar uma exceção quando tentar dividir por zero
    - lançar uma exceção quando o resultado não for inteiro
    - dividir normalmente nos demais casos

    Os testes...
    - intdiv com os parametros 8 e 2 [Sucesso]
    - intdiv com os parametros 8 e 3 [Exceção]
    - intdiv com os parametros 8 e 0 [Exceção]
    - intdiv "original" com os parametros 8 e 3 [Sucesso]
*/

include_once 'desafioIntdiv.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteiroException $e) {
    echo 'Resultado não é um número inteiro<br>';
} 

try {
    echo intdiv(9, 0) . '<br>';
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>'; // chamando intdiv direto do php original, não dá erro.
