<div class="titulo">Traits 02</div>

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
    use validacao, validacaoMelhor {
        validacaoMelhor::validarStringMelhor insteadof validacao;
        validacao::validarString as validacaoSimples;
    }
}