<div class="titulo">Desafio Recursão</div>

<?php
echo "<p>'$ array = [1,2,[3,4,5],6,[7,[8,9]],10]'
De forma recursiva, imprima todos os números e baseado na quantidade de recursão necessária,
 ir imprimindo o símbolo '>'. Resultado que deverá ser impresso:<br>
> 1 <br>
> 2 <br>
>> 3 <br>
>> 4 <br>
>> 5 <br>
> 6 <br>
>> 7 <br>
>>> 8 <br>
>>> 9 <br>
> 10</p>";
echo '<hr';
$array = [1,2,[3,4,5],6,[7,[8,9]],10];

function imprimirArray($array, $nivel = '>'){
    foreach ($array as $elemento){
        if (is_array($elemento)){
            imprimirArray($elemento, $nivel . $nivel[0]);
        }else{
            echo "$nivel $elemento<br>";
        }
    }
}
imprimirArray($array);