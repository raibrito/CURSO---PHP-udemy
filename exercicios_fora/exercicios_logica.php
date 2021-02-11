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

$num = 100;

if ($num % 10 == 0) {
    echo "O núméro $num é divisível por 10";
}

if ($num % 5 == 0) {
    echo "O núméro $num é divisível por 5";
}

if ($num % 2 == 0) {
    echo "O núméro $num é divisível por 2";
}

if ($num % 10 != 0 and $num % 5 != 0 and $num % 2 != 0) {
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
$ladoB = 6;
$ladoC = 6;
echo "Lados do triângulo: $ladoA, $ladoB e $ladoC<br>";
if (($ladoA+$ladoB>$ladoC)&&($ladoA+$ladoC>$ladoB) && ($ladoB+$ladoC>$ladoA)) {
}
if ($ladoA === $ladoB && $ladoC) {
    echo "Este é um Triângulo Equilátero.";   #todos os lados do triângulo possuem a mesma medida.
}
else if ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
    echo "Este é um Triangulo Isósceles.";    #possui dois lados iguais e um diferente.
}
else {
    echo "Este é um Triangulo Escaleno.";     #possui todos os seus lados diferentes
}

//echo '<hr>';
//echo '<p>6) Ler um número inteiro entre 1 e 12 e escrever
//o mês correspondente. Caso o número seja
//fora desse intervalo, informar que não existe
//mês com este número</p>';
//
////DESCOBRIR COMO IMPRIMIR OS VALORES E COMO INSERIR OS NÚMEROS QUE
////NÃO ESTÃO NO INTERVALO!!
//
//$arrayA = arrayA ('1','2','3','4',
//                  '5','6','7','8',
//                  '9','10','11','12');
//$arrayB =  arrayB ('janeiro', 'fevereiro',
//                   'marco', 'abril', 'maio',
//                   'junho', 'julho', 'agosto',
//                   'setembro');
//$c = array_combine($arrayA, $arrayB);
//print_r($c);

echo '<hr>';
echo '<p>7) A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias</p>';

$nomeLivro = '??';
$usuario = 'Aluno';
$recibo = '';

if ($usuario === 'Aluno') {
    $recibo = '3 dias';
    $nomeLivro = 'Outsider';
} else {
    $usuario === 'Professor';
    $recibo = '10 dias';
    $nomeLivro = 'Codigo Da Vinci';
}
echo "Usuário: $usuario <br> Recibo: $recibo <br> Nome do Livro: $nomeLivro<br><br>";
//usando switch:
$usuario = 'Professor';
switch ($usuario) {
    case 'Aluno':
         $recibo = '3 dias';
         $nomeLivro = 'Outsider';
         break;
    default:
         $recibo = '10 dias';
         $nomeLivro = 'Codigo Da Vinci';
         break;
}
echo "Usuário: $usuario <br> Recibo: $recibo <br> Nome do Livro: $nomeLivro<br>";

echo '<hr>';
echo '<p>8) </p>';


