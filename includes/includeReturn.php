<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('returnUsado.php'); //include também funciona
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>'; // mostra o local do arquivo usado

$valorRetorno2 = require(__DIR__ . '/returnNaoUsado.php');
// var_dump($valorRetorno2);
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>"; //não mostra diretamente