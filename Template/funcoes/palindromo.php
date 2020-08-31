<div class="titulo">Desafio Palindromo</div>

<?php

function inverterString($string){
    if ($string === strrev($string)){
        return "Sim";
    } else return "Não";
}

echo inverterString("Moraski") . '<br>';
echo inverterString("ana") . '<br>';
echo inverterString("arara") . '<br>';
echo inverterString("abccba") . '<br>';