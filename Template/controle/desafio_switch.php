<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
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
switch ($_POST['conversao']){
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "A distancia em KM($param) é equivalente a $distancia em milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "A distancia em Milhas($param) é equivalente a $distancia em KM";
        break;
    case 'metros-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "A distancia em Metros($param) é equivalente a $distancia em KM";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "A distancia em KM($param) é equivalente a $distancia em Metros";
        break; // celsius faren faren celsiu
    case 'cel-fah':
        $temperatura = $param * FATOR_CEL_FAH + 32;
        $mensagem = "A temperatura em celsius($param) é equivalente a $temperatura em Fahrenheit";
        break;
    case 'fah-cel':
        $temperatura = ($param-32) / FATOR_CEL_FAH;
        $mensagem = "A temperatura em Fahrenheit($param) é equivalente a $temperatura em Celsius";
        break;
    default:
        $mensagem = 'Nenhum valor calculado';
}
echo "<p>$mensagem</p>";
