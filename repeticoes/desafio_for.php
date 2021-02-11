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