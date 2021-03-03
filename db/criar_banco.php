<div class="titulo">Criar Banco</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

//informar se o banco foi criado com sucesso ou não
$resultado = $conexao->query($sql);
if($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();
