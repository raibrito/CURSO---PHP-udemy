<div class="titulo">Desafio Index</div>

<?php
//adivinhar como será imprimido a $lista:
$lista = array (
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);
//Array ( [0] => 8)( [4] =>2 )( [3] =>3 )( [a] =>4 )( [5] =>2 )( [9] =>6 )( [06] =>7 )  ( [0] => 0 -> muda para o 8 <-)
print_r($lista);                                    //( [5] =>5 )