<div class="titulo">Desafio For</div>

<!--
Criar um laço de repetição que imprima "#" na seguinte ordem
#
##
###
####
#####
-->

<?php
$p = '';
for ($cont = 1; $cont <=5; $cont++) {
    $p .= '#';
    echo "$p<br>";
}
echo '<hr>';

for ($p2 = '#'; $p2 !== '######'; $p2 .= '#' ) {
    echo "$p2 <br>";
}