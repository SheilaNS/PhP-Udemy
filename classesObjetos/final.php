<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();
    
    public final function metodo2() {
        echo "não vou mudar!<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }

 //   public function metodo2() {
 //       echo "Executando método 2<br>";
 //   }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor Único!!!';
}


    // class Duplicata extends Unica {
    //     public $att2;
    // }

$unica = new Unica();
echo $unica->attr;