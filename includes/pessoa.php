<?php

class Pessoa {
    public $nome;
    public $idade;

    function __contruct ($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Cadastrada! <br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!!';
    }
    
    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
