<div class="titulo">Desafio Impressão</div>

<!--
Enunciado:
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA", #
    "BBB",
    "CCC", #
    "DDD",
    "EEE", #
    "FFF"
];


foreach ($array as $indice => $valor) {
    if ($indice % 2 === 1) {
        continue;
    }
    echo "$indice => $valor <br>";
    if($indice >=5) {
        break;
    }
}

echo '<hr>';

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}
