<div class="titulo">Recursividade</div>

<?php
/*
 * O que é recursividade
 * 7!
 *      = 7 * 6!
 *          = vai descendo ate 2 * o fatorial de 1
 * */

function somaUmAte($numero){
    $soma = 0;
    for (; $numero>=1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursividadeUmAte($numero){
    if ($numero === 1){
        return 1;
    }
    return $numero + somaRecursividadeUmAte($numero -1);
}

echo somaRecursividadeUmAte(10) . '<br>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(10) . '<br>';