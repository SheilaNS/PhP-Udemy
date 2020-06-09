<?php


$servidor = 'localhost';
$banco = 'guiaphp';
$usuario = 'root';
$senha = 'root';
$link = mysql_connect($servidor, $usuario, $senha);
$db = mysql_select_db($banco,$link);
if(!$link)
{
echo "erro ao conectar ao banco de dados!";exit();
}