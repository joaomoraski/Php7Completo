<div class="titulo">Desafio Data</div>

<?php

class DesafioData{
    //Definição dos atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

$c1 = new DesafioData();
$c2 = new DesafioData();
$c1->dia = 20; $c1->mes = 4; $c1->ano = 2020;
$c2->dia = 31; $c2->mes = 5; $c2->ano = 2002;

echo $c1->apresentar() . '<br>';
echo $c2->apresentar();