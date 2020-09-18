<div class="titulo">Alterar</div>

<?php
require_once "conexaoPDO.php";

$sql = "UPDATE cadastro
set nome =?, nascimento = ?, email = ?, site = ?, filhos = ?, salario= = ? WHERE id=?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://moraski.co',
    1,
    12000,
    22
]);

if ($resultado){
    echo "Sucesso :)";
}else{
    print_r($stmt->errorInfo());
}
