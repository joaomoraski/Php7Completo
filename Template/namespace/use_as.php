<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>


<?php
echo __NAMESPACE__. '<BR>';

include('use_as_arquivo.php');

function soma($a,$b){
    return $a . $b; //Eu sei que esta errado, esta usado para exemplo
}

class Classe {
    public $var;
    function func(){
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx; // use as
echo soma(1,2) . '<br>';
echo ctx\soma(1,2) . '<br>'; // Acessar o contexto do namespace

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(1,22) . '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();