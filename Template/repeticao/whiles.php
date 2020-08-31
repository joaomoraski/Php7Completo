<div class="titulo">While / Do while</div>

<?php
const VALOR_LIMITE = 5;
$cont = 5;

while ($cont < VALOR_LIMITE){
    echo "while $cont <br>";
    $cont++;
}

do {
    echo "while $cont <br>";
    $cont++;
} while ($cont < VALOR_LIMITE);


$contador = 0;
while (true){
    echo "while(true) $contador <br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) break;
}