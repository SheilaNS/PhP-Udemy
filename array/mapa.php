<div class="titulo">Mapa</div>

<?php
$lista = array(1, 2, 3.4, "texto");
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>';
echo $dados[0];
echo '<br>';
var_dump($dados[0]);
echo '<br>';
var_dump($dados);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outraInformacao"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'tendei indexar um false';
echo '<br>';
print_r($lista);

$lista[true] = 'tendei indexar um true';
echo '<br>';
print_r($lista);

