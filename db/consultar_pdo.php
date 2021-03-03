<div class="titulo">PDO: Consultar</div>

<?php
require_once "consultar_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if($stmt>execute()){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
}else{
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r(($stmt->errorInfo()));
}

$conexao->close();

echo '<hr>';

//obter determinado elemento pelo id

$sql = "SELECT * FROM cadastro WHERE id = ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([1])){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
}else{
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r(($stmt->errorInfo()));
}