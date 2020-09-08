<div class="titulo">Classe abstrata</div>

<?php

abstract class Abstrata{
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata{
    public function metodo1()
    {
        // TODO: Implement metodo1() method.
        echo "executando metodo 1<br>";
    }

    abstract public function metodo3();

}

class Concreta extends FilhaAbstrata{
    public function metodo1()
    {
        echo "Executando metodo 1 extendido<br>";
        parent::metodo1();
    }

    protected function metodo2($parametro)
    {
        // TODO: Implement metodo2() method.
        echo "executando meotod 2 com parametro $parametro";
    }

    public function metodo3()
    {
        // TODO: Implement metodo3() method.
        echo "executando método 3 <br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();