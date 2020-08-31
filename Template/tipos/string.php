<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string <br>';
var_dump("Eu também!"); // Acento conta como padrão UTF-8 tbm
echo '<br>';

//concatenação
echo "Nós também" . ' somos';
echo '<br>'. 'Também aceito', ' virgulas' . '<br>';

echo "'Teste'" . '<br>' . '"Teste"' . '<br>' . '\'Teste\'' . '<br>' . '\\';

print("<br>Também existe a função print");
print "<br>Também existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MAXIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maximizada');
echo '<br>' . ucwords('todas as palavras com a primeira maximizada');
echo '<br>' . strlen('Quantas letras?');// conta as letras e conta acento
echo '<br>' . mb_strlen("Eu também", 'utf-8'); // conta o tamanho com acento
echo '<br>' . substr("Só uma parte mesmo", 7,6); //seleciona parte
echo '<br>' . str_replace('isso', 'aquilo', 'Troca isso isso');
