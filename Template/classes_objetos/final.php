<div class="titulo">Final</div>

<?php
abstract class Abstrata{
    abstract public function metodo1();

    final public function metodo2(){
        echo "Não vou mudar!<br>";
    }
}


class Classe extends Abstrata{
    public function metodo1()
    {
        // TODO: Implement metodo1() method.
        echo 'executando emtodo1 <br>';
    }

}

$classe = new Classe();
$classe->metodo1();

final class Unica{
    public $att;
}

