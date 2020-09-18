<div class="titulo">lendo_arquivo</div>

<?php
//Le pelo tamanho de bit
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';
//Ler pelo tamanho
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, filesize('teste.txt'));
fclose($arquivo);
echo '<hr>';
//Ler por linha
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo '<br>';
fclose($arquivo);
//percorrer todas as linhas do arquivo
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)){
    echo fgets($arquivo) . '<br>';
}

fclose($arquivo);
echo '<hr>';

//percorrer cada caracter (troca o s do get por um c)
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)){
    echo fgetc($arquivo) . '<br>';
}

fclose($arquivo);

$arquivo = fopen('teste.txt', 'r+'); //escrita e leitura
echo fgets($arquivo) .'<br>';
echo fgets($arquivo) .'<br>';
fwrite($arquivo, "\nAdicionando durante a leitura");
fclose($arquivo);

echo 'Fim!!';