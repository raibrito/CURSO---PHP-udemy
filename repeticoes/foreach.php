<div class="titulo">Foreach</div>

<?php
$array = [
    1=> 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];

foreach ($array as $dias) {
    echo "$dias <br>";
}
echo  '<hr>';
foreach ($array as $indice => $dias) {
    echo "$indice => $dias <br>";
}
echo  '<hr>';
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b','c','d']
];

foreach ($matriz as $linha) {
    foreach ($linha as $letra) {
        echo "$letra ";
    }
    echo  '<br>';
}
echo  '<hr>';

$numeros = [ 1,2,3,4];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}

echo  '<hr>';


