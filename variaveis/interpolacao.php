<div class="titulo">Interlopação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";
echo "<br> $numero + 1";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tenho 5 { $objeto}s, mas perdi 3 {$objeto }s.";
// espaço antes gera problema, espaço depois não gera problema
echo '<br>';
echo "$numero";
echo '<br>';
echo "($numero + 1)";