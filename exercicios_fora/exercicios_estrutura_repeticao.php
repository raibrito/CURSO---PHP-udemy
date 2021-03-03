<div class="titulo">Exercícios das Estruturas de Repetição</div>

<?php
echo '<p> Utilizando um intervalo de 0 até 100, com incremento de 1 no valor de $i:</p>';

echo "A) Exibir todos os números ímpares: <br>";
for ($i = 0; $i <= 100; $i++) {
    if(($i%2) == 1) {
        echo "$i, ";
    }
}

echo '<hr>';
echo "B) Exibir números que são primos:<br>";
//Números primos são aqueles que só são divisíveis por 1 e por ele mesmo.

for ($i = 0; $i <= 100; $i++) {
    $divisor = 0;
    for ($j = $i; $j >=1; $j--) {
        if (($i % $j) == 0) {
            $divisor ++;
        }
    }
    if ($divisor == 2) {
        echo $i . ',';
    }
}

echo '<hr>';
echo "C) Exibir números múltiplos de 4:<br>";

//para determinar o múltiplos do número 4, devemos multiplicar o número 4 por números inteiros.
// 4 · 1 = 4
//
//4 · 2 = 8
//
//4 · 3 = 12

for ($i = 0; $i <= 100; $i++) {
    if (($i %4) == 0) {
        echo "$i, ";
    }
}

echo '<hr>';
echo "D) Saber a soma de todos os números pares.<br>";

$soma = 0;

for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }

}
echo $soma;

echo '<br>';

echo '<hr>';
echo "E) Desenhar uma tabela HTML com 5 colunas e quantas linhas forem necessárias, 
exibindo o valor de $ i dentro de cada célula.";
//TERMINAR ESSA TABELA!
//
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
    ['21', '22', '23', '24', '25'],
    ['26', '27', '28', '29', '30'],
    ['36', '37', '38', '39', '40'],
    ['41', '42', '43', '44', '45'],
    ['46', '47', '48', '49', '50'],
    ['51', '52', '53', '54', '55'],
    ['56', '57', '58', '59', '60'],
];

?>


<table border="1">
    <?php

        foreach ($matriz as $linha) {
            echo '<tr>';
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }

    ?>
</table>

<style>

    table {
        border:  1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

</style>
<hr>
<?php
//programa que lê o número correspondente ao dia da semana:
$diaDaSemana = 6;

switch ($diaDaSemana){
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-Feira";
        break;
    case 3:
        echo "Terça-Feira";
        break;
    case 4:
        echo "Quarta-Feira";
        break;
    case 5:
        echo "Quinta-Feira";
        break;
    case 6:
        echo "Sexta-Feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Número inválido";
}