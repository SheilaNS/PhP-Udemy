<div class="titulo">Include Vs Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php'); // gera um alerta, mas não trava o código

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php'); // gera um erro fatal

echo 'Não achou mesmo...<br>'; // depois de um erro fatal, essa linha não é executada