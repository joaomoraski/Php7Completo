<div class="titulo">desafio_erros</div>

<?php
interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    public function metodo1()
    {
        // TODO: Implement metodo1() method.

    }
    public function metodo2($parametro)
    {
        // TODO: Implement metodo2() method.
        echo "O Parametro passado é: $parametro <br>";
    }

    public function metodo3(){
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro){
        parent::metodo2($parametro);
    }
}

$exemplo = new Classe("teste");
$exemplo->metodo3();