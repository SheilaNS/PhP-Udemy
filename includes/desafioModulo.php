<div class="titulo">Desafio do Módulo</div>

<?php
// ini_set('display_errors', 1);
require_once('usuario.php');

$usuario = new Usuario ('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();

unset($usuario);
