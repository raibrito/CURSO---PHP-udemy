<?php

function novaConexao($banco = 'curso_php') {
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '12345678';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",
            $usuario, $senha);
        return $conexao;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}