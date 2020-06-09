<div class="titulo">Resposta Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metro > km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;


$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km = $distancia Milhas";
    break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia km";
    break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param metros = $distancia km";
    break;
    case 'km-metro':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param km = $distancia metros";
    break;
    case 'cel-fah':
        $distancia = $param * FATOR_CEL_FAH + 32;
        $mensagem = "$param °C = $distancia °F";
    break;
    case 'fah-cel':
        $distancia = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "$param °F = $distancia °C";
    break;
    default:
        $mensagem = "Nenhum valor calculado";
                
}

echo "<p>$mensagem.</p>";