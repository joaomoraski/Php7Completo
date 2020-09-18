<?php

function novaConexao($banco = 'curso_php'){
    $servidor = 'localhost';
    $nome = 'root';
    $senha = '';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",$nome, $senha);
        return $conexao;
    }catch (PDOException $e){
        die("Erro: " . $e->getMessage());
    }
}

