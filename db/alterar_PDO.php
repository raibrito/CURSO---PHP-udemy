<div class="titulo">PDO: Alterar</div>

<?php
include_once 'conexao.php';

$sql = "UPDATE cadastro
SET nome = ?, nascimento = ?, email = ?,
site = ?, filhos = ?, salario = ?
WHERE id = ? ";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
   'Enzo',
    '2000-04-29',
    'zitos123@cabritos.com',
    2,
    3200,
]);

if(resultado){
    echo "Sucesso";
}else{
    print_r($stmt->errorInfo());
}
$conexao->close();