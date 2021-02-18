<div class="titulo">Recursividade</div>

<?php
echo '<p><strong>Recursividade:</strong> é  quando ocorre uma chamada de determinada função a ela mesma, 
isso ocorre até que determinada condição seja atingida.</p>';

function factorial(int $num) : int{
    if ($num <= 1 )
        $num = $num;
    else
        $num *= factorial($num -1);
    return $num;
}
echo factorial(4) . '<br>';

//metodo for:
function somaAteUm($number){
    $soma = 0;
    for (; $number >= 1; $number--){
        $soma += $number;
    }
    return $soma;
}
echo somaAteUm(5) . '<br>';

//metodo do professor:
function somaRecursivaUmAte($numero){
    //Condição de Parada!!
    if ($numero === 1){
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}
echo somaRecursivaUmAte(10);