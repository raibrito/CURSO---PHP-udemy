<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES ('Geovania Martins',
        '1973-02-26', 
        'geovaniamartins@email.com',
        'https://geovaniamartins.com',
        1,
        13500
       )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();