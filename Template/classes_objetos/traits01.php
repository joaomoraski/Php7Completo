<div class="titulo">traits01</div>

<?php
trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}


trait validacaoMelhor{
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}


class Usuario{
    use validacao, validacaoMelhor;
}

$user = new Usuario();
echo $user->validarString('     ') . '<br>';
echo $user->validarStringMelhor('     22');
