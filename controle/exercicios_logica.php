<div class="titulo">Exercícios Lógica</div>

<?php

$num1 = 6;
$num2 = 1;
$totalSoma = $num1 + $num2;
echo '<p>1) Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5.</p>';

echo 'Os números são: ' . $num1 . " e " . $num2;
echo '<br>';
if ($totalSoma > 20) {
    echo $totalSoma + 8;
}if ($totalSoma <= 20) {
    echo  $totalSoma - 5;
}

echo '<hr>';
echo '<p>2) Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes</p>';
//só está mostrando o primeiro divisor. Arrumar!!

$num = 100;
if ($num % 10 == 0) {
    echo "O núméro $num é divisível por 10";
}elseif ($num % 5 == 0) {
    echo "O núméro $num é divisível por 5";
}elseif ($num % 2 == 0) {
    echo "O núméro $num é divisível por 2";
} else{
    echo "O núméro $num não é divisível por 10, 5 e 2";
}

echo '<hr>';
echo '<p>3) Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.</p>';

$nome = "Luciano";
$sexo = 'Masculino';
$idade = "10";

if ($sexo === 'Feminino' && $idade <=25){
    echo "->$nome ACEITA!";
}else {
    echo "->$nome não aceito!";
}

echo '<hr>';
echo '<p>4) Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes)</p>';
echo "Os números são: 0, 1 e 2 <br>";
$array = array('0', '1', '2');
rsort($array);
foreach ($array as $valor) {
    echo "$valor<br>";
}

echo '<hr>';
echo '<p>5) Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados</p>';

$ladoA = 6;
$ladoB = 5;
$ladoC = 6;

if ($ladoA === $ladoB && $ladoC) {
    echo "Triângulo Equilátero";   #todos os lados do triângulo possuem a mesma medida.
} if () {

}




