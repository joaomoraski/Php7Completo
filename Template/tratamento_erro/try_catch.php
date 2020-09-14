<div class="titulo">Try/Catch</div>

<?php

try {
    echo intdiv(7,0);
} catch (Error $error){
    echo "Teve um erro aqui<br>";
}

try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7,0);
} catch (DivisionByZeroError $error){
    echo 'Divisão por zero<br>';
} catch (Throwable $throwable){
    echo 'Erro encontrado: ' . $throwable->getMessage() . '<br>';
} finally {
    echo 'Sempre é executado<br>';
}

echo 'Execução continua...<br>';

