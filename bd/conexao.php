<?php

function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost:3307';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}
