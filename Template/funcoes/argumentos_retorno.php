<div class="titulo">Argumentos e retorno</div>

<?php
/*
 * SEmpre que uma função retorna um valor, tem que referenciar em variavel e pa pq dai ele vai passar
 * */
function obterMensagem(){
    return "Seja bem vindo(a)!";
}

obterMensagem();
$m = obterMensagem();
echo $m . "<br>";
echo obterMensagem();

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Thiago');

function soma($a, $b){
    return $a + $b;
}
$x = 4;
$y = 5;
echo '<br>' . soma(1,2);
echo '<br>' . soma($x, $y);


function trocaValor($a, $novovalor){
    $a = $novovalor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);
echo '<br>' , $variavel;