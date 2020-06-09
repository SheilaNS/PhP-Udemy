<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja', 'abacaxi');
// FRUTAS[0] = 'banana'; -> alterar não funciona!
// FRUTAS[] = 'banana'; -> add também não funciona!
echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];
