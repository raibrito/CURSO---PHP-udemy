<?php
session_start();
print_r($_SESSION);

$_SESSION['email'] = 'mariafilha_alterada@emailaz.com.br';
?>

<p>
    <b>Nome:</b><?= $_SESSION['nome']?><br>
    <b>E-mail:</b><?= $_SESSION['email']?>
</p>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>
