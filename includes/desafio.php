<div class="titulo">Desafio do Módulo</div>

<?php
require_once ('usuario.php');

$usuario = new Usuario('rai brito', 26, 'bugoia');
$usuario->apresentar();
unset($usuario);