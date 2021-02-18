<div class="titulo">Lista de exercícios de Funções em PHP</div>

<?php
echo '<p>1)Faça um programa que recebe três números do usuário, e identifica 
o maior através de uma função e o menor número através de outra função.</p>';

$num1 = 3;
$num2 = 2;
$num3 = 1;

function maiorNumero($num1, $num2, $num3){
    $max = $num1;
    if ($num2 > $max){
        $max = $num2;
        if ($num3 > $max){
            $max = $num3;
        }
        return $max;
    }
}




function menorNumero($num1, $num2, $num3){
    $min = $num1;
    if ($num2 < $min){
        $min = $num2;
        if ($num3 < $min){
            $min = $num3;
        }
        return $min;
    }
}
