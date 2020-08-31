<div class="titulo">Função & Escopo</div>

<?php
/*
 * Função das funções é repetir trechos de codigo para facilitar na parte da programação, colocando nomes bons, ou comentarios em cima pra explicar
 *
 * */
function imprimirMensagens(){
    echo "Olá ";
    echo "Até a próxima! <br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor(); //variavel so vai trocar de valor dentro da função,
echo "Depois: $variavel <br>";


function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade(); //com a variavel global ele muda
// Variavel local = dentro da função, variavel global = dentro de todo o arquivo
echo "Depois: $variavel <br>";