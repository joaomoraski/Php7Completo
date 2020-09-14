<?php namespace Appdiv; ?>
<div class="titulo">Desafio IntDiv</div>

<?php

ini_set('display_errors', 0);
class DivisaoZeroException extends \Exception {
    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        echo "Erro personalizado: $message<br>";
        parent::__construct($message,$code,$previous);
    }
}


function intdiv($a,$b){
    if ($b === 0){
        throw new \DivisionByZeroError();
    }
    if ($a%$b > 0){
        throw new DivisaoZeroException('O resultado não foi inteiro');
    }
    return $a / $b;
}
echo 'Testes<br>';
echo 'Teste #01: ' . intdiv(8,2) . '<br>';
echo 'Teste #02: ' . intdiv(8,3) . '<br>';
echo 'Teste #03: ' . intdiv(8,0) . '<br>';
echo 'intdiv original: ' . \intdiv(8,3);

?>
