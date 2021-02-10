<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;
echo '<br>';
echo '<br>';

//Atribuição por Valor:
echo "Atribuição por Valor:";
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "$variavelValor";
echo '<br>';
echo '<br>';

//Atribuição por Referência:
echo "Atribuição por Referência:";
echo '<br>';
$variavelReferencia = &$variavel;
echo $variavelReferencia;
$variavelReferencia = 'mesma referência';
echo "<br>$variavel, $variavelReferencia"; //usei vírgula somente para manter organizado.
