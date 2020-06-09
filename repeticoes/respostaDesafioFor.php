<div class="titulo">Resposta Desafio For</div>
 <!-- Usar o for...
     #
     ##
     ###
     ####
     #####
     1) Pode udar incremento $i++
     2) Não pode usar incremento $i++
-->
<?php
$impressao = '';

for ($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for ($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}
