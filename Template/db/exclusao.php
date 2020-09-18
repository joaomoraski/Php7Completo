<div class="titulo">Exclusão</div>

<?php
require_once "conexaoPDO.php";

$conexao = novaConexao();
$sql = "DELETE FROM cadastro WHERE id = ?";

$stmt = $conexao->prepare($sql);
if($stmt->execute([1])){
    echo "Sucesso :)";
}else{
    echo "ERRO:(";
    print_r($stmt->errorInfo());
}
