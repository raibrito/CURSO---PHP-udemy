<div class="titulo">PDO: Excluir</div>
<?php

$id = $_GET["id"];
include_once 'conexao.php';

$sql = "DELETE FROM  cadastro WHERE id = ? =";

$con = novaConexao();
$stmt = $con->prepare($sql);

if($stmt->execute([3])){
    echo "Deletado com sucesso";
}else{
    echo "Erro ao deletar!";
    print_r($stmt->errorInfo());
}
$con->close();
