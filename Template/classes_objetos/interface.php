<div class="titulo">Interface</div>

<?php
interface Animal {
    //metodos que devem ser implementados apartir da calsse
    //Tem funcionalidades em comum mas nao sabe como dar um padrão
    function respirar();
}
interface Canino { //pode extender animal
    function latir(): string;
}

class Cachorro implements Animal, Canino{
    function respirar()
    {
        // TODO: Implement respirar() method.
        echo 'Cachorro respirando auau';
    }
    function latir(): string
    {
        // TODO: Implement latir() method.
        return 'auau';
    }
}

$dogao = new Cachorro();
$dogao->respirar();
echo '<br>';
echo $dogao->latir();