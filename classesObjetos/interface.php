<div class="titulo">Interface</div>

<?php
interface Animal { // define métodos e comportamentos que devem ser implementados a partir das classes
    function respirar();
}

interface Mamifero { // define métodos e comportamentos que devem ser implementados a partir das classes
    function mamar();
}

interface Canino extends Animal, Mamifero {
    public function latir();
    public function correr();
}
interface Felino {
    public function correr();
}

class Cachorro implements Canino { // obrigatóriamente precisa incluir o métoro da interface
    function respirar() {
        return 'Irei respirar ar!<br>';
    }
    function latir(): string { // pode ter um parâmetro
        return 'Au! Au!<br>';
    }
    function mamar() {
        return 'Irei usar leite<br>';
    }
    function correr() {
        return 'Vrummmm...<br>';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();
echo $animal1->mamar();
echo $animal1->correr();


echo 'Fim!<br>';
var_dump($animal1);

echo '<br>';
var_dump($animal1 instanceof Cachorro); // é uma instancia de ... ?
var_dump($animal1 instanceof Canino); // é uma instancia de ... ?
var_dump($animal1 instanceof Mamifero); // é uma instancia de ... ?
var_dump($animal1 instanceof Animal); // é uma instancia de ... ?
var_dump($animal1 instanceof Felino); // é uma instancia de ... ?
