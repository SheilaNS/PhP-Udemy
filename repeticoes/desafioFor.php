<div class="titulo">Desafio For</div>
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
$simbolo = '#';

for ($i = 0; $i < 5; $i++) {
    echo "$simbolo";
    $simbolo = $simbolo . '#';
    echo "<br>";
}

echo '<hr>';

for ($simbolo = '#'; $simbolo !== '######'; $simbolo = $simbolo . '#') {
    echo "$simbolo <br>";
}
