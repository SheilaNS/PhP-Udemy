<?php

echo 'Carregando: includeOnceArquivo<br>';
$variavel = 'Estou definida';

if (!function_exists('soma')) {
    function soma ($a, $b) {
        return $a + $b;
    }
}
