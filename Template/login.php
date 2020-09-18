<?php
session_start();
ini_set('display_errors', 0);
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']){
    $usuarios = [
        [
                "nome" => "Aluno Cod3r",
                "email" => "aluno@cod3r.com.br",
                "senha" => "123456",
        ],
        [
                'nome' => 'Moraski',
                'email' => 'joaomoraskilunkes@gmail.com',
                'senha' => '123456',
        ]
    ];

    foreach ($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida){
            $_SESSION['erros'] = '';
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário/Senha nao é valido!'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/estilo.css">
    </head>
    <body class="login">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Seja bem vindo!</h2>

        </header>
        <main class="principal">
            <div class="conteudo">
                <h3>Identifique-se</h3>
                <?php if ($_SESSION['erros']):  ?>
                    <div class="erros">
                        <?php foreach ($_SESSION['erros'] as $erro): ?>
                            <p><?= $erro ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endif  ?>
                <form action="#" method="post">
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha"/>
                    </div>
                    <button>Entrar</button>
                </form>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>
