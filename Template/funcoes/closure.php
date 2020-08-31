<div class="titulo">Closure & Callable</div>

<?php

$soma = function($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
};


//Callable - pdoe ser chamado

echo $soma(2,3) . '<br>';
echo (is_callable($soma) ? 'Sim' : 'Não') . '<br>';

echo soma2(2,32) . ' ';
//echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';
