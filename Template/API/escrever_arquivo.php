<div class="titulo">Escrever arquivo</div>
<?php

$arquivo = fopen('teste.txt', 'w');//Abrir arquivo em modo de escrita
fwrite($arquivo, "Valor inicial\n"); //Primeiro o arquivo, depois o valor

$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteudo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); //Escreve a mais
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "adicionando em um segundo momento");
fclose($arquivo);

//$arquivo = fopen('teste.txt', 'x');
