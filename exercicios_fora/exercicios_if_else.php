<div class="titulo">Lista de Exercícios de Testes Condicionais (IF, ELSE, ELSEIF e SWITCH) </div>

<?php
echo "<p> 1. Faça um script em PHP que verifique se uma letra digitada é vogal ou consoante.</p>";

$vogal = 'i';

if($vogal =="a"){
    echo "A letra digitada é uma vogal";
} elseif ($vogal =="e"){
    echo "A letra digitada é uma vogal";
} elseif ($vogal =="i"){
    echo "A letra digitada é uma vogal";
} elseif ($vogal =="o") {
    echo "A letra digitada é uma vogal";
} elseif ($vogal == "u") {
    echo "A letra digitada é uma vogal";
} else {
    echo "A letra digitada é uma consoante";
}

echo '<hr>';
echo '<p>2. Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo,
 negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</p>';

$numUsuario = 12;

if ($numUsuario >0 ){
    echo "$numUsuario é um número positivo.";
}elseif ($numUsuario < 0) {
    echo "$numUsuario é um número negativo.";
} else {
    echo  "$numUsuario é igual a zero";
}

echo '<hr>';
echo '<p>3. Exibir números pares de 0 até 15</p>';

for ($i = 0; $i <= 15; $i++) {
    if(($i%2) == 0) {
        echo "$i <br>";
    }
}


echo '<hr>';
echo '<p>4. Sistema que pede duas notas de um aluno. Em seguida ele deve calcular a média do aluno e dar o seguinte resultado:<br>

    A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
    A mensagem "Reprovado", se a média for menor do que sete;
    A mensagem "Aprovado com Distinção", se a média for igual a dez.</p>';
?>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="get">
    Nota 1:  <input type="text" name="nota1" /><br />
    Nota 2:  <input type="text" name="nota2" /><br />
    <input type="submit" name="submit" value="Calcular" />
</form>
<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1 + $nota2)/2;
echo "Média: $media <br/>";
if ($media <7) {
    echo "Reprovado";
} elseif ($media == 10){
    echo "Aprovado com Distinção";
} else {
    "Aprovado";
}
?>
</body>
</html>
