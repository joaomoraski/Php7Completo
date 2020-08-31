<div class="titulo">Constantes PHP</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo "Constantes: " . TAXA_DE_JUROS;

echo '<br>';

const NOVA_TAXA = 2.5;
echo 'Nova taxa: ' . NOVA_TAXA;
//constante não pode receber valor de uma variavel se for pelo const, mas pelo define pode
echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretorio: ' . __DIR__;