<div class="titulo">Desafio Equação</div>

<?php
echo 'Resolvendo a equação usando variáveis:';

$parteA = (6 * (3 + 2)) ** 2;
$parteB = 3 * 2;
$parteG = $parteA / $parteB;
$parteC = (1 - 5) * (2 - 7);
$parteD = 2;
$parteF = (($parteC / $parteD) ** 2);

$parteE = ($parteG - $parteF) ** 3;

$resultado = $parteE / (10 ** 3);

echo '<br>A resposta é: ' . $resultado;