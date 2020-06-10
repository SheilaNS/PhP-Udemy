<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público'; // visível por todas as classes, com ou sem função
    protected $protegido = 'Protegido'; // visivel somente nas classes filhas
    private $privado = 'Privado'; // visível somente na classe pai ou se for chamada diretamente por uma função


    public function mostrarA() {
//        $this->naoMostrar(); só aparece se for chamada por uma função
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Sou transmitido por herança!<br>';
    }
    
    private function naoMostrar() {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
// echo $a->privado; Não roda!!!
// echo $a->protegido; tb não roda!!!
$a->mostrarA();
// $a->naoMostrar();

echo "Fim!<br>";

class B extends A {
    public function mostrarB () {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->naoMostrar();
// $b->vaiPorHeranca();