<div class="titulo">Visibilidade</div>


<?php
class A{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';


    public function mostrarA(){
        echo "a) Publico = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";

    }

    function mostrinha(){
        $this->naoMostrar();
    }

    private function naoMostrar(){
        echo 'Não vou imprimir nada não';
    }
}

$classeA = new A();
$classeA->mostrarA();


class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();