<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ['Elza','Rapuzel','Branca de neve', 'Cinderela'];

$sorteio = array_rand($nomes);

echo "<h1><center>$nomes[$sorteio]</center></h1>";