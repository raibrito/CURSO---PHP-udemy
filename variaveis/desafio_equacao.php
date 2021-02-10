<div class="titulo">Desafio Equação</div>

<?php

$n1 = (6*(3+2))**2;
$d1 = 3*2;

$n2 = (1-5)*(2-7);
$d2 = 2;

$sup1 = $n1/$d1;
$sup2 = ($n2/$d2)**2;
$sup = ($sup1 - $sup2)**3;

$inf = 10**3;

$final = $sup / $inf;
echo "O resultado da expressão A é: " . $final . ".";

echo '<br>';

$a = 4/5*(7/3-1);
$b = 2/9 - 3;
$total = $a/$b;
echo "O resultado da expressão B é: " . $total . ".";







