<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('includeOnceArquivo.php');
require('includeOnceArquivo.php');

echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('includeOnceArquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include_once('includeOnceArquivo.php'); // sabe que o arquivo já foi carregado uma vez e não redefine a variável
echo "Variável = '{$variavel}'.<br>";

require_once('includeOnceArquivo.php');
echo "Variável = '{$variavel}'.<br>";
