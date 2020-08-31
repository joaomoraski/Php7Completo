<div class="titulo">Desafio FOR</div>

<!--
Fazer um laço for
#
##
###
####
#####
-->
<?php

$nada = '';
for ($i = 0; $i < 5; $i++){
    $nada .= '#';
    echo $nada . '<br>';
}

echo '<hr>';

for($impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .='#'){
    echo "$impressao2 <br>";
}