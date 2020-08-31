<div class="titulo">Laço For</div>

<?php
for ($cont = 1; $cont <= 5; $cont++) {//variavel, a condição, a logica de soma e pa
    echo "$cont <br>";
}

for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo '<hr>';
for ($i = 1; $i <= count($array); $i++){
    echo "{$array[$i]} <br>";
}

$matriz = [
    ['a' ,'e','i','o','u'],
    ['b','c','d']
];
echo '<hr>';
for ($i = 0; $i <count($matriz); $i++){
   for($j = 0; $j<count($matriz[$i]); $j++){
       echo "{$matriz[$i][$j]} <br>";
   }
   echo '<br>';
}
