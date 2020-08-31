<div class="titulo">Map/Filter</div>

<?php
//Map transforma um objeto em array, um array em objeto e pa, o que importa é a função do meio
/*
 * a função é passada no parametro pro map pra ele fazer o que precisa
 * so retorna verdadeiro ou falso
 * filtra fazendo com v ou f
 * */

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach ($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

$notasFinais2 = array_map('round', $notas); // pasas a função e dps o array
echo '<br>';
print_r($notasFinais2);


function aprovados($nota){
    return $nota >=7;
}

echo '<br>';
$apenasOsAprovados2 = array_filter($notas, 'aprovados'); //passa o array e a função
print_r($apenasOsAprovados2);