<div class="titulo">Static</div>

<?php

class A{
    public $naoStaticc = 'Variavel de instancia'; //instancia e objeto é sinonimo
    public static $static = 'Variavel de classe';

    public function mostrarA(){
        echo "Não estatica = {$this->naoStaticc}<br>";
        //Tentativa 1
        //echo "estatica = {$this->static}<br>";
        //Tentativa 2
        //echo "estatica = {self::static}<br>";
        echo "estatica = ". self::$static . "<br>";
    }

    public static function mostrarStaticA(){
//        echo "Não estatico = {$this->naoStaticc}<br>";
        echo "estatica = ". self::$static . "<br>";

    }
}

$objetoA = new A();
$objetoA->mostrarA();
//$objetoA->mostrarStaticA();
A::mostrarStaticA();
echo A::$static;