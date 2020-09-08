<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     */
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Tchau!!';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa{//usuario = sub classe e pessoa é super classe
    public $login;

    /**
     * Usuario constructor.
     * @param $login
     */
    public function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->idade = $idade;
        echo 'Usuário criado! <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz: Tchau!!';
    }

    public function apresentar()
    {
        echo "@{$this->login} ";
        parent::apresentar(); // TODO: Change the autogenerated stub
    }
}

$usuario = new Usuario('Moraski', 21,'moraskinho');
$usuario->apresentar();