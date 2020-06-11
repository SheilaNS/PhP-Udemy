<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não Estática = {$this->naoStatic}<br>";
        // tentativa 1: não chama com $this
        // echo "Estática = {$this->static}<br>";
        // tentativa 2: não chama com {}
        // echo "Estática = {self::static}<br>";
        // tentativa 3: chama com concatenação (.)
        echo "Estática = " . self::$static . "<br>";
    }
    
    public static function mostrarStaticA() {
        // tentativa 1: não chama instância
        // echo "Não Estática = {$this->naoStatic}<br>";
        // tentativa 2: não chama static direto
        // echo "Estática = {$static}<br>;
        echo "Estática = " . self::$static . "<br>";        
    }
}

$objetoA = new A(); // static não precisa de new
$objetoA->mostrarA(); 
$objetoA->mostrarStaticA(); // não é a forma mais correta para chamar static


echo "<br>";
echo A::$static, "<br>"; // chamar diretamente pela classe
A::mostrarStaticA(); // chamar diretamente pela classe

A::$static = 'Alterado membro de classe!'; // static pode ser alterado
echo A::$static, '<br>';