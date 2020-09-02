<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    //Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    //metodos
    public function apresentar(){
        //Tudo aqui é objeto por enquanto,
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
        //Acessar atributos dentro da classe usa o this
    }
}

$c1 = new Cliente();
$c1->nome = "Moraskinho";
$c1->idade = 20;


$c2 = new Cliente();
$c2->nome = "Luiz";
$c2->idade = 22;


$c1->apresentar();
$c2->apresentar();