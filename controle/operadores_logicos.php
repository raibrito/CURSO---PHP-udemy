<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica:</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p class='divisao'>Tabela Verdade do 'AND'(E):</p><hr>";
//Só será verdadeiro quando houver dois 'true'
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
var_dump(false && true);
echo '<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and false);
var_dump(false and true);

echo "<p class='divisao'>Tabela Verdade do 'OR'(OU):</p><hr>";
//somente será falso quando os dois resultados forem falsos
var_dump(true  || true);
var_dump(true  || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true  or true);
var_dump(true  or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade do 'XOR'(OU Exclusivo):</p><hr>";
//sempre que for "um" ou "outro" o resultado sempre será verdadeiro
var_dump(true  xor true);
var_dump(true  xor false);
var_dump(false  xor true);
var_dump(false  xor false);

var_dump(true  != true);
var_dump(true  != false);
var_dump(false  != true);
var_dump(false  != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 66;
$sexo = 'F';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar<br>";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar por mais alguns anos...";
}



