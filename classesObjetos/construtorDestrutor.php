<div class="titulo">Contrutor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor chamado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Rebeca Maria', 40);
$pessoa->apresentar();

// $pessoa = new Pessoa(); --> Problema!

echo "Fim!";

unset($pessoa); // chama do destrutor

// se não colocar a idade, ele vai assumir o valor passado no método construtor
$pessoaB = new Pessoa('João Pedro');
$pessoaB->apresentar();
$pessoaB = null; // também chama o destrutor