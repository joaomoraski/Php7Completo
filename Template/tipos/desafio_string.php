<div class="titulo">Desafio String PHP</div>
<?php

//Enunciado:
// Avaliando os métodos da documentação da string, qual os métodos que a posição do texto 'abc' na string '!AbcaBcabc' retorna 1;

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
