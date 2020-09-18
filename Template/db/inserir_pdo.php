<div class="titulo">inserir_pdo</div>

<?php
require_once "conexaoPDO.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
        VALUES(
        'Joao Moraski',
        'Moraski@gmail.com',
        '1998-7-21',
        'https://moraski.dev.com.br',
        0,
        3000
        )";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if ($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id";
}else{
    echo $conexao->errorCode(). '<br>';
    print_r($conexao->errorInfo());
}