<div class="titulo">Inserir Registro 1</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES 
 ('Joao Pedro', '1990-11-15', 'joaopedro@gmail.com', 'https://joaopedro.sites.com.br', 0, 1800.37)";

 $conexao = novaConexao();
 $resultado = $conexao->query($sql);

 if($resultado) {
    echo "Sucesso \o/";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
