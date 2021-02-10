<div class="titulo">Operações Aritméticas</div>
<?php

echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5,'<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; //resultado tipo float
echo intdiv(7,4),'<br>'; //mostrará resultado tipo inteiro
echo round(7 / 4), '<br>'; //arredondar
echo 7 % 4, '<br>'; //ímpar
echo 7 % 2, '<br>'; //ímpar
echo 8 % 2, '<br>'; //par
echo 7 / 0, '<br>'; //infinito

echo 4 ** 2, '<br>';

//Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';


