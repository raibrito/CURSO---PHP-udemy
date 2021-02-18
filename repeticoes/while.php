<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador ++;
}

echo '<br>';

$contador = 100;
do {
    echo "do-while $contador <br>";
    $contador ++;
} while ($contador < VALOR_LIMITE);

echo '<br>';

$contador = 0;
while (true) {
    echo "While(true) $contador <br>";
    $contador ++;
    if ($contador >= VALOR_LIMITE) break;
}