<div class="titulo">Include Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno <br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require (__DIR__ . '/return_nao_usado.php');
echo "$valorRetorno2<br>";
