<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA . '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

echo '<br>';
unset($soma);
echo (var_dump($soma));

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma String!";
echo '<br>' . $variavel;

// nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida';
// $6var = 'inválida';
// $%var7 = 'inválida';
// $var8% = "inválida';

echo '<br>';
var_dump($_SERVER);

echo '<br><br>';
var_dump($_SERVER["HTTP_HOST"]);
