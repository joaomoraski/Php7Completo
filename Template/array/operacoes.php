<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    'idade' => 28
];

$dados2 = [
    'naturalidade' => 'Fortaleza'
];

//adicionar novo dado
$dados2["endereco"] = "Rua A";

$dadosCompletos = $dados1 + $dados2; //juntar os dados do array se os indices forem diferente
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // verifica se é um array
echo '<br>' . "continha " . count($dadosCompletos);  //conta a quantidade de dados

echo '<br>';
$indice = array_rand($dadosCompletos); // pega numero aleatorio
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; //prints diferentes
echo " ${dadosCompletos['idade']}";//prints diferentes

//remover elemento de array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);
//remover array inteiro
unset($dadosCompletos);


$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

//juntar array
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
//altera o array
sort($decimais);
echo '<br>';
print_r($decimais);