<div class="titulo">Laço for</div>

<?php
for($cont = 1; $cont<=5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <=10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <15;) {
    echo "$cont <br>";
    $cont++;
}

$array = [
     1=> 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];

print_r($array);
echo '<hr>';

for ($i = 1; $i <= count($array); $i++){
    echo "{$array[$i]} <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b','c','d']
];

echo '<hr>';

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
    echo "{$matriz[$i][$j]}" ;
    }
    echo "<br>";
}