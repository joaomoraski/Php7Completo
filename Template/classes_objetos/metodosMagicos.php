<div class="titulo">Metodos Magicos</div>

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
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'E morreu!<br>';
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "{$this->nome} tem {$this->idade} anos!<br>";
    }

    public function apresentar(){
        echo $this . '<br>';
    }

    public function __get($atrib){
        echo "Lendo atributo não declado: {$atrib} <br>";
    }
    public function __set($atrib,$valor){
        echo "Lendo atributo não declado: {$atrib}/{$valor} <br>";
    }

    public function __call($metodo, $params){
        echo "tentando executar o metodo ${metodo}";
        echo "<br>, com os parametros: ";
        print_r($params);
    }
}
$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar();
echo $pessoa, '<br>';
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

echo $pessoa->nomeCompleto = "Muito legal";

$pessoa->exec(1,2,3,4);