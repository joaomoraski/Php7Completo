<div class="titulo">Variaveis</div>

<?php

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);//verifica se existe a variavel

unset($somaDosNumeros);


$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Regras de nomenclatura
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr = 'invalido, evitar acentos e pa';
//$5var = 'invalido';
