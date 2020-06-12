<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";

$sql = 'CREATE TABLE IF NOT EXISTS cadastro (
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,
    nascimento DATE,
    email VARCHAR (100) NOT NULL,
    site VARCHAR (100),
    filhos INT,
    salario FLOAT
)';

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso \o/";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
