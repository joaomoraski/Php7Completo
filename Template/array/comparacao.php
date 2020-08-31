<div class="titulo">Comparação Arrays</div>

<?php
$arra1 = ['nome'=> 'maria', 'idade' => 20];
$arra2 = ['nome'=> 'maria', 'idade' => 20];
var_dump($arra1 == $arra2);
var_dump($arra1 === $arra2);

$arra3 = ['idade' => 20, 'nome' => 'maria'];
echo '<br>';
var_dump($arra1 == $arra3);
var_dump($arra1 === $arra3);
var_dump($arra1 != $arra3);
var_dump($arra1 !== $arra3);