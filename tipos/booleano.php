<div class="titulo">Tipo Booleano</div>

<?php

    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false');
    echo '<br>' . is_bool(false);
    echo '<br>' . is_bool('true');

    // faser as regars de conversões
    echo '<p>Regras:</p>';
    echo '1)' ;
    echo var_dump((bool) 0); // apenas ZERO é false
    echo '<br>2)' ;
    echo  var_dump((bool) 20); //true
    echo '<br>3)' ;
    echo  var_dump((bool) -1); //true
    echo '<br>4)' ;
    echo  var_dump((bool) 0.0); //false
    echo '<br>5)' ;
    echo  var_dump((bool) 0.00000001); //true
    echo '<br>6)' ;
    echo  var_dump((bool) ""); //false
    echo '<br>7)' ;
    echo  var_dump((bool) " "); //true
    echo '<br>8)' ;
    echo  var_dump((bool) "0"); //false
    echo '<br>9)' ;
    echo  var_dump((bool) "00"); //true
    echo '<br>10)' ;
    echo  var_dump((bool) "false"); //true
    echo '<br>11)' ;
    echo  var_dump(!!"false"); //true
    