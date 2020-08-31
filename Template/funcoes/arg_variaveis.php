<div class="titulo">Argumentos variaveis</div>

<?php
function soma ($a , $b){
    return $a + $b;
}

echo soma(14,15) .'<br>';
echo soma(6,5,4) . '<br>';

function somaCompleta(...$numeros){ //pra passar mais valores
    $soma = 0;
    foreach ($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5);

$array = [ 6,7,8];
echo '<br>' . somaCompleta(...$array); //os 3 pontos transforma em array pra percorrer dentro da função, logo, os 3 prontinhos tbm fazem o inverso


function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes){
        foreach ($dependentes as $dependente){
            echo "Depende: $dependente <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", 'Pedro', 'Rafaela', 'Amanda');

echo '<br>';
membros('Roberto', 'Junior');