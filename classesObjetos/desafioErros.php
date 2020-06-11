<div class="titulo">Desafio 7 Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe implements ClasseAstrata {
    function __construct($parametro) {

    }
}

$exemplo = Classe();
$exemplo.metodo3();