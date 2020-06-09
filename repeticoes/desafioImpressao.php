<div class="titulo">Desafio Impressão</div>

<!-- Enunciado:
- Imprima apenas os valores do array que contém índice par
- Desafio adicional: Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
$array = ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF"];
print_r($array);

echo '<hr>';
echo "Resposta usando for: <br>";
for($i=0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}

echo '<hr>';
echo "Resposta usando foreach: <br>";
foreach($array as $indice => $valor) {
    if ($indice % 2 !== 0) continue;
    echo "$valor <br>";
}
