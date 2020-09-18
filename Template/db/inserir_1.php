<div class="titulo">inserir_1</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
        (nome,nascimento,email,site,filhos,salario)
        VALUES(
            'Marieta',
            '1989-10-29',
            'marieta@gmail.com',
            'https://marieta123.sites.com.br',
            2,
            13000
        )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);


if ($resultado){
    echo "Sucesso :)";
} else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();