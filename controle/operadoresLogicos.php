<div class="titulo">Operadores Lógicos</div>

<?php


echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';
var_dump(!!true);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
echo '<br>';
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';

echo '<br>';
var_dump(true AND true);
echo '<br>';
var_dump(true AND false);
echo '<br>';
var_dump(false AND true);
echo '<br>';
var_dump(false AND false);
echo '<br>';

echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7);
echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');
echo '<br>';

echo '<br>';
echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
echo '<br>';
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';
var_dump(true || 3 > 2 || 7 <= 7);
echo '<br>';
var_dump(true || 3 > 2 || 7 <= 7 || 3 === '3');
echo '<br>';

echo '<br>';
var_dump(true OR true);
echo '<br>';
var_dump(true OR false);
echo '<br>';
var_dump(false OR true);
echo '<br>';
var_dump(false OR false);
echo '<br>';

echo '<br>';
echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
echo '<br>';
var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';

echo '<br>';
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';

echo '<br>';
echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
echo '<br>';
var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');

$atingiuCriterio = $criterioHomem || $criterioMulher;

$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode ser aposentar -> $podeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} elseif ($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else{
    echo 'Vai ter que trabalhar mais um pouco...';
}





