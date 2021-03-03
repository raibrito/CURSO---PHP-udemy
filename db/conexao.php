<?php

function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '12345678';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //verificar se a conexao foi feita com sucesso
    if($conexao->connect_error){
        //forma de tratar erro que n deve ser usada em produção, pois matará
        // todo o fluxo da página
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}