<?php

function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost:3307';
    $usuario = 'root';
    $senha = 'root';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        return $conexao;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}

novaConexao();
// echo "Sucesso \o/";