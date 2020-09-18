<div class="titulo">Gerenciando Sessão</div>

<?php
//session_id('l0rgdn6k798d8datuloj98odu3');
session_start();
echo session_id();
//kbupla8dfvb39nd9ka7tocili9

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if ($_SESSION['contador'] % 5 === 0 ){
    session_regenerate_id();
}

if ($_SESSION['contador'] >= 15){
    session_destroy();
}