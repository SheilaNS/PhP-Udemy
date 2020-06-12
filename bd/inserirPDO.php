<div class="titulo">Inserir PDO</div>

<?php
require_once "conexaoPDO.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES 
('Guilherme', '1998-7-21', 'guizao@gmail.com', 'http://guizao.com.br', 3, 3000)";

$conexao = novaConexao();
// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "<br>Novo cadastro com id $id.";
} else {
    echo $conexao->erroCode() . '<br>';
    print_r($conexao->errorInfo());
}