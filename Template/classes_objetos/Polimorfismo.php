<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida{
    public $peso;
}


class Feijao extends Comida{

}

class Arroz extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
    public $peso;

    function __construct($peso)
    {
        $this->peso= $peso;
    }

    public function comer(Comida $comida){
        $this->peso+=$comida->peso;
    }
}


$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new Sorvete();
$c2->peso = 0.45;


$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);