<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define('CONSTANTE2', 234);
define('contexto\CONSTANTE2', 1234);
define(__NAMESPACE__ . '\CONSTANTE3', 345);
define('outro_contexto\CONSTANTE4', 456);

echo CONSTANTE1 . '<br>';
echo \CONSTANTE2 . '<br>';
echo CONSTANTE2 . '<br>';
// echo contexto\CONSTANTE3 . '<br>'; não chama a constante
echo \contexto\CONSTANTE3 . '<br>';
echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<br>';
// echo CONSTANTE4 . '<br>'; não chama a constante, tem que explicitar o namespace criado
echo\outro_contexto\CONSTANTE4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2). '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>'; // no contexto namespace
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // no contexto API