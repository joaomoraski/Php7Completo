<?php
session_start();

if ($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if (!$_SESSION['usuario']){
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
</head>
<body class="exercicio">
<header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do exercício</h2>
</header>
<nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario']; ?></span>
    <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
    <a href="logout.php">Sair</a>
</nav>
<main class="principal">
    <div class="conteudo">
        <?php
//            include($_GET['dir'] . "/" . $_GET['file'] . ".php");
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); //Entre chaves, dentro de aspas duplas da pra usar variaveis php
        ?>
    </div>
</main>
<footer class="rodape">
    COD3R & ALUNOS &copy; <?php echo date('Y'); ?>
</footer>
</body>
</html>