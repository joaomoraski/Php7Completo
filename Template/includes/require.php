<div class="titulo">Require</div>

<?php
echo 'Usando o include com arquivo inexistente...<br>';


ini_set('display_errors', 1);
include('arquivo_inexistente.php');

echo 'Não achou mesmo...<br>';

echo 'Usando require com arquivo inexistente';
require('arquivo_inexistente.php');

echo 'Não achou mesmo...<br>';