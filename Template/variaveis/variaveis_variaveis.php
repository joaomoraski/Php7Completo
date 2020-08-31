<div class="titulo">Variaveis variaveis</div>

<?php

$a = 'ValorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a}";
