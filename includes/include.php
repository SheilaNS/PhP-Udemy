<div class="titulo">Include</div>

<?php
echo 'Executei essa linha do arquivo include<br>';
include('include_arquivo.php');
// include('include_arquivo.php'); // ao carregar 2 vezes o mesmo arquivo, carregar 2 vezes a mesma funcão causa problema

echo soma(3, 8) . '!<br>';
echo "O conteúdo da variável é '{$variavel}'.";