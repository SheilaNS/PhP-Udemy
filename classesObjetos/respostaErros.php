<div class="titulo">Resposta Desafio 7 Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
    public function metodo1() {
    
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }
    public function metodo2($parametro) {

    }

}

$exemplo = new Classe('alguma coisa');
$exemplo->metodo3();