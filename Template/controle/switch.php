<div class="titulo">Switch</div>

<?php

$categoria = '???';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000;
} else{
    $carro = 'Mobi';
    $preco = '33000';
}

$precoFormatado = number_format($preco, 2, ',', '.');
//number_format(O valor, a casa decimal, o ponto da casa decimal, o ponto da casa de mil);
echo "<p>Carro: $carro <br> Preço: R$ $precoFormatado</p>";

$categoria = 'LUXO';
switch (strtolower($categoria)){
    case 'luxo': //Pode usar chaves
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
    case 'sub': // mas de uma condição
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default: //else
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro <br> Preço: R$ $precoFormatado</p>";
