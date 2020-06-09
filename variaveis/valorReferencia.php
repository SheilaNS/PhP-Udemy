<div class="titulo">Valor Vs Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

// Atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribução por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "<br>$variavel $variavelReferencia";