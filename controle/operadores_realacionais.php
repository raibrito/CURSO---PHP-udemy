<div class="titulo">Op. Relacionais</div>

<?php
//por que os valores estão como booleano??
echo "(1 == 1)?" . var_dump(1 == 1) . '<br>';
echo "(1 > 1)?"  . var_dump(1 > 1)  . '<br>';
echo "(1 >= 1)?" . var_dump(1 >= 1) . '<br>';
echo "(4 < 23)?" . var_dump(4 < 23) . '<br>';
echo "(1 <=7 )?" . var_dump(1 <=7)  . '<br>';
echo "(1 != 1)?" . var_dump(1 != 1) . '<br>';
echo "(1 <> 1)?" . var_dump(1 <> 1) . '<br>' . '<br>';

echo "(111 == '111')?"  . var_dump(111 === '111') . '<br>';
echo "(111 === '111')?" . var_dump(111 === '111') . '<br>';
echo "(111 != '111')?"  . var_dump(111 != '111' ) . '<br>';
echo "(111 !== '111')?" . var_dump(111 !== '111') . '<br>';

echo"<p class='divisao'>Relacionais no If/Else:</p><hr>";
$idade = 23;
if ($idade < 18) {
    echo "Criança ou adolescente = $idade anos";
}elseif ($idade <= 60) {
    echo "Adulto = $idade anos";
}else{
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship:</p><hr>";
var_dump(500<=>3);
var_dump(50<=>50);
var_dump(5<=>50);

echo "<p class='divisao'>Valores pdem ser V ou F:</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>




