<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2 ["end"] = "Rua A"; #adicionando novo elemento no array.

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); #verifica se é array.
echo '<br>' . count($dadosCompletos); #verifica a quantidade de elementos dentro do array.

echo '<br>';

$indice = array_rand($dadosCompletos); #pegar um índice aleatoriamente.
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';

echo "$dadosCompletos"; #apenas mostrará p texto "Array".
// echo "$dadosCompletos ['idade']"; dará erro.
echo "{$dadosCompletos ['idade']}";
echo " ${dadosCompletos ['idade']}";

//unset($dadosCompletos ["nome"]); #remover um elemto do array.
//echo'<br>';
//print_r($dadosCompletos);

//unset($dadosCompletos); #remover todos os elementos do araay.
//echo '<br>';
//var_dump($dadosCompletos);

$impares = [1,2,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares; #mostrará somente os números pares.
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); #mostrará os elementos dos dois arrays, mas não de forma ordenada.
echo '<br';
print_r($decimais);

sort($decimais); #mostrará os elementos dos dois arrays de forma ordenada.
echo '<br>';
print_r($decimais);
























