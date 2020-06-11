<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct ($nome, $idade) { // constrói os atributos
        echo 'Construtos chamado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct () { // destrói os atributos e retorna um valor
        echo '<br>E morreu!';
    }

    public function __toString() { // coloca os atributos em uma string
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>"; 
    }

    public function __get($atrib) { // aparece quando um atributo não declarado é chamado
        echo "Lendo atributo não declarado: {$atrib}<br>";
        return $atrib;
    }

    public function __set($atrib, $valor) { // aparece quando um atributo não declarado não é chamado e altera seu valor
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) { //aparece quando um método não é declarado/criado e mostra os parâmetros passados nesse método
        echo "Tentando executar método ${metodo}";
        echo ", com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); //__contruct
$pessoa->apresentar(); //__toString
echo $pessoa, '<br>'; //__toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); //__toString sem o __call

var_dump($pessoa->nomeCompleto);
echo '<br>';
var_dump($pessoa->nomeCompletoBlaBla);
echo '<br>';
$pessoa->nomeCompleto = "Muito legal!!!"; //__set
$pessoa->nomeCompleto; //__get
echo $pessoa->nome; //chama o atributo sem o __get

echo '<br>';
$pessoa->exec(1, 'teste', true, [1, 2, 3]); //__call

$pessoa = null; //__destruct