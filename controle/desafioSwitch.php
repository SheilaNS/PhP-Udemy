<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metro > km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="c-fr">Celsius > Fahrenheit</option>
        <option value="fr-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
$param =  $_POST['param'];
$conversao = $_POST['conversao'];
$resposta = 0.0;
$medida = '';

switch ($conversao) {
    case 'km-milha':
        $resposta = $param / 1.609;
        $medida = 'milhas';
    break;
    case 'milha-km':
        $resposta = $param * 1.609;
        $medida = 'km';
    break;
    case 'metro-km':
        $resposta = $param / 1000;
        $medida = 'km';
    break;
    case 'km-metro':
        $resposta = $param * 1000;
        $medida = 'metros';
    break;
    case 'c-fr':
        $resposta = ($param * 1.8) + 32;
        $medida = 'Fahrenheit';
    break;
    case 'fr-c':
        $resposta = ($param - 32) / 1.8;
        $medida = 'Celsius';
    break;
    default:
        echo "Nenhum valor foi informado.";
}

$respostaFormatada = number_format($resposta, 3, ',', '.');
echo "<p>A conversão é de $respostaFormatada $medida.</p>";

