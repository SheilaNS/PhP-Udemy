<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_função<br>';

function carregarArquivo () {
    include('include_arquivo.php');

    echo $variavel . '<br>'; // essa variável fica restria apenas para o método carregarArquivo()
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>';
carregarArquivo();

echo "Variável = '{$variavel}'.";
echo '<br>';
var_dump($variavel); // essa variável fica NULL pois seu valor não foi definido fora do método carregarArquivo()
echo '<br>';
echo soma(1, 8) . '!';