<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');

    echo soma(2,5) . '!<br>';
}

// Include so vai funcionar dentro da função
echo '<br>Novamente no arquivo include_funcao<br>';
//echo soma(1,8) . '!<br>';
//carregarArquivo();