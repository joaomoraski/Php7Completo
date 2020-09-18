<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);

echo '<br>';

if (!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']){
    $_SESSION['email'] = 'joaomoraskilunkes@gmail.com';
}

?>

<p>
    <a href="basico_sessao_alterar.php">Alterar sessão</a>
</p>
