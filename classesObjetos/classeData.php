<div class="titulo">Classe Data</div>

<?php
class Data {
    // atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;
    
    public function apresentar() {
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}.";
    }
}

$data = new Data();
echo $data->apresentar(), '<br>';

$aniversario = new Data();
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;
echo $aniversario->apresentar(), '<br>';

$casamento = new Data();
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;
echo $casamento->apresentar(), '<br>';

